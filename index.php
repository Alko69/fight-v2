<?php


spl_autoload_register(function ($class_name) {
    require 'classes/' . $class_name . '.php';
});

$character1 = new Healer('Dende');
$character2 = new Warrior('Vegeta');
$pnumb = 1;

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./style.css">
    <script src="./fight.js" defer></script>
    <title>Document</title>
</head>
<header>
    <img src="./img/dfz.png" alt="">
</header>
<body>
    <div id="characBand">
        <div id="swords">
            <img src="./img/sword.png" id="first" class="sword">
            <img src="./img/sword.png" id="second" class="sword">
        </div>
    </div>
    <div id="names">
        <div  id="p1"class = "player"><?php echo $character1->name . " (" . $character1->class . ")"?></div>
        <div class= "player" id="p2"><?php echo $character2->name . " (" . $character2->class . ")"?></div>
    </div>
    <?php
         while ($character1->isAlive() && $character2->isAlive()){
                echo '<p id =' . "n$pnumb>";
                $pnumb ++;
                echo $character1->action($character2) ;
                echo '<br>';
                $result = "$character1->name a gagné !";
                if ($character2->isAlive()){
                    echo $character2->action($character1);
                    echo '<br>';
                    $result = "$character2->name a gagné !" ;
                }
         }
  
     echo '<p class="winner" id='. "n$pnumb >" . $result .'</p>';
    ?> 
</body>
</html>