<!DOCTYPE html>
    <head>
        <title>Menu Deroulant</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="indexStyle.css">
    </head>
    <body>
         <nav class="main">
            <ul>
                <a href="index.php?page=1"><li>Exercice 1</li></a>
                <a href="index.php?exo=1"><li>Exercice 2</li></a>
                <a href="index.php?exo=2"><li>Exercice 3</li></a>
                <a href="index.php?exo=3"><li>Exercice 4</li></a>
                <a href="index.php?exo=4"><li>Exercice 5</li></a>
                <a href="index.php?exo=5"><li>Application 1</li></a>
                <a href="index.php?exo=6"><li>Application 2</li></a>
            </ul>
        </nav>
    <?php
        if(isset($_GET["page"]) || isset($_GET["pageSup"])){
          include ("exercice1.php");
        }
        if(isset($_GET["exo"])){
            $exo = $_GET["exo"];
            switch($exo){
                case '1':
                    include ('exercice2.php');
                break;
                case '2':
                    include ('exercice3.php');
                break;
                case '3':
                    include ('exercice4.php');
                break;
                case '4':
                    include ('exercice5.php');
                break;
                case '6':
                    include ('application1.php');
                break;
                case '7':
                    include ('application2.php');
                break;
                default : echo "Exercice inexistant";
                break;
            }
        }
    ?>
       </body>
</html>