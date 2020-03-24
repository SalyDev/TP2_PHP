<?php
    $mois = [
        'anglais' => [],
        'francais' => []
    ];
    for($i=0;$i<12;$i++){
        $mois['anglais']=['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    }
    for($i=0;$i<12;$i++){
        $mois['francais']=['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre'];
    }
?>
<DOCTYPE html>
    <title>exercice2</title>
    <link rel="stylesheet" href="exerciceStyle.css">
    <body>
        <div class="form">
            <form method="POST">
                Choisissez votre langue d'affichage : 
                <select name="langue">
                    <option value="anglais">Anglais</option>
                    <option value="francais">Français</option>
                </select>
                <input class="bouton" type="submit" value="valider" name="submit">
            </form>
        </div>
        <?php
           if(isset($_POST["submit"])){
            $langue=$_POST["langue"];
            ?>
            <table class="tableEx2">
            <?php
            $i=0;
            for($l=0;$l<4;$l++){
                ?>
                <tr class="LigneEx2">
                    <?php
                    for($c=0;$c<6;$c++){
                        if(isset($mois[$langue][$i])){
                    ?>
                    <td class="colonne1"><?php echo $i+1 ?></td>
                    <td class="colonne2"><?php echo $mois[$langue][$i++] ?></td>
                    <?php
                        }
                    }
                    ?>
                <tr>
                <?php
            }
            ?>
         </table>
        <?php
            }
        ?>
    </body>
</html>