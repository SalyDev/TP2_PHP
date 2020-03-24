<?php
        session_start();
        $taille = $taille2 = null;
        $pageSup = 1;
        require "myFonctions.php";
        $ereur = "";
        $_SESSION["valeur"]=$valeur = null;
        $tab = $T1 = $T1['superieur'] = $T1['inferieur'] = [];
        if(isset($_POST["submit"])){
            if(empty($_POST["valeur"])){
                session_destroy();
            ?>
            <div class="ereur">*Veuillez remplir le champs</div>
            <?php
        }
        else{
            $valeur = $_POST["valeur"];
            if(testEntier($valeur)=="faux"){
                session_destroy();
                $ereur = "*Veuillez donner un entier";
            }
            else{
                if($valeur<=10000){
                    session_destroy();
                    $ereur = "*Veuillez donner une valeur superieur a 10 000";
                }
                else{
                    $_SESSION["valeur"]=$_POST["valeur"];
                        $tab = array();
                        for($j=1;$j<=$valeur;$j++){
                            if(nbPremier($j)=="vrai"){
                            $tab[] = $j;
                            $T=[
                                'inferieur' => [],
                                'superieur' => []
                            ];
                            }
                            }
                        if(!empty($tab)){ 
                            $_SESSION["moyenne"]=moyenne($tab); 
                            for($j=0;$j<count($tab);$j++){
                                if($tab[$j]<moyenne($tab)){
                                    $T1['inferieur'][]=$tab[$j];
                                }
                                else{
                                    $T1['superieur'][]=$tab[$j];
                                    }
                                        }
                                            }
                            $_SESSION["inferieur"]=$T1['inferieur'];
                            $_SESSION["superieur"]=$T1['superieur'];
                                                }
                                                    }
                                                        }
                                                            }

?>
<DOCTYPE html>
    <head>
        <title>exercice1</title>
        <link rel="stylesheet" href="exerciceStyle.css">
    </head>
    <body>
        <form method="POST">
            <div class="form">Donner une valeur entiere superieure à 10 000: <input class="input" type="text" name="valeur" value="<?=$_SESSION["valeur"];?>" ><span class="ereur"><?php echo $ereur;?></span></div>
            <input class="form bouton" type="submit" value="valider" name="submit">
        </form>
        <?php 
        if(isset($_SESSION["moyenne"])){
            ?>
            <div class="form">La moyenne est : <?php echo $_SESSION["moyenne"]?></div>
        <?php
            }
            if(isset($_SESSION["inferieur"])){
             $p = count($_SESSION['inferieur'])/100;
                if(!empty($_GET["page"])){
                    $recup=is_int($_GET["page"])?$_GET["page"]:false;
                    $page=(int)$_GET["page"];  
                    ?>
                        <style>
                            <?php echo '.'.$page ?>{
                                background-color:yellow;
                            }
                        </style>
                    <?php
                }
                else{
                    $page = 1;
                }
                $debut = $page*100;
                $nbElement = 100;
            ?>
            <div class="inferieur">
            <h4>Les valeurs inferieures à la moyenne sont :</h4>
            <?php
            myPagination($_SESSION["inferieur"],$debut,$nbElement,10,10);
            for($i=0;$i<$p;$i++){
                ?>
                <a href="index.php?page=<?php echo $i+1 ?>" class="lienEx1"><?php echo $i+1?></a>
                <?php
                }
            ?>
        </div>
        <?php
        }
        if(isset($_SESSION["superieur"])){
            $p = count($_SESSION['superieur'])/100;
            if(!empty($_GET["pageSup"])){
                $recup=is_int($_GET["pageSup"])?$_GET["pageSup"]:false;
                $pageSup=(int)$_GET["pageSup"];  
                ?>
                    <style>
                        <?php echo '.page'.$i ?>{
                            background-color:yellow;
                        }
                    </style>
                <?php
            }
            else{
                $pageSup = 1;
            }
            $debut = $pageSup*100;
            $nbElement = 100;
        ?>
        <div class="superieur">
        <h4>Les valeurs superieures à la moyenne  sont :</h4>
        <?php
        myPagination($_SESSION["superieur"],$debut,$nbElement,10,10);
        ?>
        <?php
        for($j=0;$j<$p;$j++){
        ?>
            <a href="index.php?pageSup=<?php echo $j+1?>" class="lienEx1"><?php echo $j+1?></a>
        <?php
        }
        ?>
        </div>
        <?php
            }
        ?>
    </body>
</html>