<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>fonctions</title>
</head>
<body>
<?php
    //fonction qui retourne si un caractere alphanumerique est une minuscle (a-z)
        function testMinuscle($valeurTeste){
            $i=1;
            for( $x = "a"; $i <= 26; $x++ ) {
               $tab[]=$x;
               $i++;
            }
            $retour="faux";
            for($j=0;$j<26;$j++){
                if($valeurTeste==$tab[$j]){
                    $retour = "vrai";
                }
            }
            return $retour;
        }
        //autre methode
        //retourne 1 si la valeur est minuscle et rien sinon
        function testMinuscle2($valeurTeste){
            return ($valeurTeste>="a" && $valeurTeste<="z");
        }


    //fonction qui retourne si un caractere alphanumerique est une majuscule (A-Z)
        function testMajuscule($valeurTeste){
            $retour = "faux";
            if($valeurTeste>="A" && $valeurTeste<="Z"){
                $retour = "vrai";
            }
            return $retour;
        }

    //si un caractere est alphabetique
    function testAlphabet($valeurTeste){
        $retour = "faux";
        if(testMinuscle($valeurTeste)=="vrai" || testMajuscule($valeurTeste)=="vrai"){
            $retour = "vrai";
        }
        return $retour;
    }



    // une fonction qui convertit et retourne un caractere en minuscule
    //ord retourne le code ASCII d;un caractere
    //chr retourne la caractere correspondant a un code ASCII donne
    //a=>97 et A=>32 a-A=32
    function convMinuscule($valeur){
        if($valeur>="A" && $valeur<="Z"){
            $codeValeur = ord($valeur) + 32;
        }
        return chr($codeValeur);
    }

    //fonction qui retourne un caractere em majuscule
    function convMajuscule($valeur){
     if($valeur>="a" && $valeur<="z"){
         $codeValeur = ord($valeur) - 32;
     }
     return chr($codeValeur);
    }

    // fonction qui convertit une chaine en minuscule
    //je supp
    function chMinuscule($valeur){
        $i=0;
        while($i < laTaille($valeur)){
            if($valeur[$i]>="A" && $valeur[$i]<="Z"){
                $codeValeur = ord($valeur[$i]) + 32;
                echo chr($codeValeur);
            }
            else{
                echo $valeur[$i];
            }
            $i=$i+1;
        }
    }

    //function qui convertit une chaine en majuscule
    function chMajuscule($valeur){
        $i=0;
        while($i < laTaille($valeur)){
            if($valeur[$i]>="a" && $valeur[$i]<="z"){
                $codeValeur = ord($valeur[$i]) - 32;
                echo chr($codeValeur);
            }
            else{
                echo $valeur[$i];
            }
            $i=$i+1;
        }
    }

    //une fonction qui retourne la taille d'une tableau
    function tailleTab($valeur){
        $taille = 0;
        foreach($valeur as $element){
            $taille++;
        }
        return $taille;
    }

    //fonction qui retourne la taille d'une chaine ou d'un tableau
    function laTaille($valeur){
        $i=0;
        while(isset($valeur[$i])){
            $i++;
        }
        return $i;
    }
    
    //fonction qui teste si un caractere est dans une chaine ou un tableau
    //$main est une chaine ou un tableau
    function content($valCherche, $chaine){
        $i=0;
        while(($i<laTaille($chaine)) && ($valCherche!=$chaine[$i])){
            $i++;
        }
        if($i==laTaille($chaine)){
            $retour = "faux";
        }
        else{
            $retour = "vrai";
        }
        return $retour;
    }



    // éè_çù
    //fonction qui teste les caractere accentues
    // if($valeur="é" || $valeur="è" || $valeur=="è" || $valeur="ù" |/)
     function Accent($valeur){
        $car = ["à","á","â","ã","ä","å","ç","è","é","ê","ë","ì","í",
                "î","ï","ð","ò","ó","ô","õ","ö","ù","ú","û","ü","ý","ÿ"];
        $retour = "faux";
        foreach($car as $element){
            if($valeur==$element){
                echo $element;
                $retour = "vrai";
            break;
            }
        }
        return $retour;
    }
    
    //fonction qui teste si une chaine de caracteres est un mot
        function mot($chaine){
        $retourFinal = "faux";
        for($i=0;$i<laTaille($chaine);$i++){
            if(testAlphabet($chaine[$i])=="vrai"){
                $retour[$i]="vrai";
            }
            else{
                $retour[$i]="faux";
            }
        }
        $j=0;
        while($j<laTaille($chaine) && $retour[$j]=="vrai"){
            $j++;
        }
        if($j==laTaille($chaine)){
            $retourFinal = "vrai";
        }
        return $retourFinal;
    }

    //fonction permettant de valider si un entier est positif
    function testEntier($valeur){
       for($i=0;$i<laTaille($valeur);$i++){
        if(($valeur[$i]>=0) && !($valeur[$i]>="a" && $valeur[$i]<="z")){
            $retour[$i] = "vrai";
        }
        else{
            $retour[$i] = "faux";
        }
    }
        $j=0;
        while($j<laTaille($valeur) && $retour[$j]=="vrai"){
            $j++;
        }
        if($j==laTaille($valeur)){
            $retourFinal = "vrai";
        }
        else{
            $retourFinal = "faux";
        }
            return $retourFinal;
       } 

//fontion permettant de tester un entier
function test_entier($valeur){
    return ($valeur>0 || $valeur=="0");
}

//fonction qui supprime les espaces entres les caracters d'une chaine
function my_trim($chaine){
    $car="";
    for($i=0;$i<laTaille($chaine);$i++){
        if(testMinuscle2($chaine[$i]) || testMajuscule($chaine[$i]) || test_entier($chaine[$i])){
            $car=$car.$chaine[$i];
        }
    }
    return $car;
}

?>
<?php
// echo mot("9yggd");
// echo testEntier("10");
// $valeur = "z";
// echo testMinuscle($valeur);
// echo testMinuscle2($valeur);
// echo testMajuscule("W");
// echo testAlphabet("2");
// echo chMinuscule("FIKEDW IJDFHE JFCSD KJKJ1");
// echo chMajuscule("jhde ike ksqe,dey5")
// $tab=[1,8,9,8];
// echo tailleTab($tab);
// echo laTaille("hdfgf1jj jjhh");
// echo laTaille("maman");
// $tab=['m','a','y'];
// echo content("M","man");
// echo "èé";
// // echo valideMot("è");
// echo valideMot("777")
// echo "è";
// $mot="öè";
// echo motValide($mot);
// echo chMajuscule("jedh");
// echo valideMot("öè");
?>
</body>
</html>
