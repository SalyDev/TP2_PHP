<?php
    session_start();
    require "fonctions.php";//different du fichier myFonctions.php
    if(!empty($_POST['nbMot'])){
    $_SESSION['nbMot']=$_POST['nbMot'];
    }
?>
<DOCTYPE html>
    <head>
        <title>exercice3</title>
        <link rel="stylesheet" href="styleApp2.css">
    </head>
    <body>
        <div class="conteneur">
        <form method="POST" name="formulaire">
            <div class="matrice">Donner le nombre de mots : <input class="nbre inputEx3" type="text" name="nbMot" value="<?=$_SESSION['nbMot']?>"><span class="ereur"></div>
            <?php
            $tab=[];
            if(isset($_POST["valider"])){
                if(empty($_POST["nbMot"])){
                    ?>
                  <div class="ereur">*Veuillez rensigner le nombre de mots"</div>
                  <?php
                }
                else{
                    if(testEntier($_POST['nbMot'])=="faux"){
                        ?>
                        <div class="ereur">*Nombre invalide</div>
                        <?php
                    }
                    else{
                   $s=0;

                    for($i=0;$i<$_POST["nbMot"];$i++){
                            if(empty($_POST['mot'.$i])){
                            $_POST['mot'.$i]=null;
                                $ereur[$i]="";
                            }
                        $_POST['mot'.$i]=my_trim($_POST['mot'.$i]);
                        if(mot($_POST['mot'.$i])=="faux" || laTaille($_POST['mot'.$i])>20){
                            $ereur[$i] = "*Mot invalide";
                        }
                        else{
                            $ereur[$i] = "";
                            $tab[]=$_POST['mot'.$i];
                        if(content("m",$_POST['mot'.$i])=="vrai" || content("M",$_POST['mot'.$i])=="vrai"){
                            $s++;
                        }
                    }  
                }
                for($i=0;$i<$_POST["nbMot"];$i++){
                    ?>
                        <div class="matrice"><?php echo 'Mot '.($i+1)?><input class="inputEx3" type="text" name="<?php echo 'mot'.$i ?>" value="<?=$_POST['mot'.$i]?>"?><span class="ereur"><?php echo $ereur[$i]; ?></span></div>
                    <?php
                }
            ?>
            <div class="matrice affich">
                <?php
                    if(laTaille($tab)==$_POST["nbMot"]){
                        echo "Les mots saisis sont :<br/>";
                        foreach($tab as $element){
                            echo $element.'<br/>';
                        }
                        echo "Le nombre de mots contenant la lettre m est : $s";
                    }
                ?>
            </div>
            <?php
            }
        }
    }
            ?>
            <input type="submit" class="btnEx3 submit" name="valider" value="valider">
        </form>
        </div>
    </body>
</html>
