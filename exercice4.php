<!DOCTYPE html>
    <head>
    <title>exercice4</title>
    <link rel="stylesheet" href="exerciceStyle.css">
    <script>
        // document.querySelector('.result').disabled=true;
        document.formulaire.querySelector('.corrige').innerHTML="HELLO";
    </script>
    <style>
        .main{
            width:80%;
            height:100%;
            margin:auto; 
        }
        .area{
            border-radius:5px;
            margin-top:5px;
        }
        .submit{
            border-radius:5px;
            color:white;
        }
    </style>
    </head>
    <body>
        <div class="main">
        <form method="POST">
            <div class="libelle">Donnez un texte :</div> 
            <div><textarea name="texte" cols="100" rows="25" class="area"><?php echo $_POST["texte"]?></textarea></div>
            <input class="bouton submit" type="submit" value="valider" name="submit">
        </form>
    <?php
        require "fonctions.php";
       if(isset($_POST["submit"])){
           if(empty($_POST["texte"])){
               ?>
                <div class="ereur">Veuillez donner un texte</div>
            <?php
           }
           else{
               $texte = $_POST["texte"];
               $tab= splitPhrase($texte);
            ?>
            <textarea cols="100" rows="25" name="result" class="area"><?php foreach($tab as $element){echo $element;}?></textarea>
            <?php
           }
       }
    ?>
    </div>
    </body>
</html>