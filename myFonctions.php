<?php
    function testEntier($valeurAteste){
        $regex = '#^[0-9]{1,9}$#';
        if(preg_match($regex, $valeurAteste)){
            $retour = "vrai";
        }
        else{
            $retour = "faux";
        }
        return $retour;
        }
    function nbPremier($valeurAteste){
        $i = 2;
        $q = $valeurAteste%$i;
        if($i%2==0){
        while ($i<$valeurAteste && $q!=0){
            $q = $valeurAteste%$i;
            $i++;
        }
    }
        if ($i==$valeurAteste){
            $retour = "vrai";
            }
        else{
            $retour = "faux";
            }
            return $retour;
        }
        //calcul de la moyenne
        function moyenne($valeurAteste = array()){
            if($valeurAteste!=null){
            $somme = 0;
            foreach($valeurAteste as $element){
                $somme = $somme + $element;
            }
            return $somme/count($valeurAteste);
        }
        }
        function testMot($valeurAteste){
            $regex = '#^[a-zA-Z]{1,20}$#';
            if(preg_match($regex, $valeurAteste)){
                $retour = "vrai";
            }
            else {
                $retour = "faux";
            }
            return $retour;
        }
        function contentM($valeurAteste){
            $regex1 = '#m#';
            $regex2 = '#M#';
            if(preg_match($regex1,$valeurAteste) || preg_match($regex2,$valeurAteste)){
                $retour = "vrai";
            }
            else{
                $retour = "faux";
            }
            return $retour;
        }
        function orange($valeurAteste){
        
            $regex1 = '#^77[ ]?[0-9]{3}([ ]?[0-9]{2}){2}$#';
            $regex2 = '#^78[ ]?[0-9]{3}([ ]?[0-9]{2}){2}$#';
            if(preg_match($regex1,$valeurAteste) || preg_match($regex2,$valeurAteste)){
                $retour = "vrai";
            }
            else{
                $retour = "faux";
            }
            return $retour;
        }
        function free($valeurAteste){
            $regex = '#^76[ ]?[0-9]{3}([ ]?[0-9]{2}){2}$#';
            if(preg_match($regex,$valeurAteste)){
                $retour = "vrai";
            }
            else{
                $retour = "faux";
            }
            return $retour;
        }
        function expresso($valeurAteste){
            $regex = '#^70[ ]?[0-9]{3}([ ]?[0-9]{2}){2}$#';
            if(preg_match($regex,$valeurAteste)){
                $retour = "vrai";
            }
            else{
                $retour = "faux";
            }
            return $retour;
        }
        function nom($valeurAteste){
            $regex = '#^[A-Z]?[a-z]([ ]?[A-Z]?[a-z]){1,20}$#';
            if(preg_match($regex,$valeurAteste)){
                $retour = "vrai";
            }
            else{
                $retour = "faux";
            }
            return $retour;
        }
        // fonction qui gere la liste des admins
    function administrateur():array{
        return [
            [   
                "nom" => "Dione",
                "prenom" => "Ndeye Saly",
                "login" => "salydione",
                "password" => "saly2020",
            ],
            [
                "nom" => "Mbaye",
                "prenom" => "Arame",
                "login" => "arame2019",
                "password" => "arc123"
               
            ],
            [
                "nom" => "Cisse",
                "prenom" => "Maty",
                "login" => "maty2019",
                "password" => "maty123"
            ],

            ];
    }
    //questionnaire
    function questionnaire():array{
        return [
            "question" => [],
            "score" => [],
            "nbreReponse" => [],
            "reponse" => [],
            "result" => []
            ];
    }
    
    //fonction permettant d'afficher un tableau en n ligne, n colonnes
    function myPagination($tableau,$debut,$nbElement,$nbLigne,$nbColonne){
        ?>
        <table class="tableEx1">
        <?php
             $i=$debut-$nbElement;
            for($l=0;$l<$nbLigne;$l++){ 
        ?>
        <tr class="ligneEx1">
            <?php
                for($c=0;$c<$nbColonne;$c++){
                    if(isset($tableau[$i])){
            ?>
            <td>
                <?php echo $tableau[$i++]?>
             </td>
            <?php
 
                }
            }
            ?>
        </tr>
        <?php
            }
        ?>
        </table>
        <?php
    }
    


     
     
