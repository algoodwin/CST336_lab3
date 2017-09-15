<?php

$deck = array();
$suits = array("clubs","spades","hearts","diamonds");
$scores = array(0, 0, 0, 0);

for ($i = 0; $i < 4; $i++) {            //sets the suit 
    for ($j = 1; $j <= 13; $j++) {      //sets the value
    
        $deck[] = $suits[$i] . "_" . $j;
    }
    
}

shuffle($deck);

foreach ($deck as $card) {              //displays all values of the array for debugging 
    echo $card . "<br />";
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title> SilverJack </title>
        <meta charset="utf-8"/>
        <style>
            @import url("css/styles.css");
        </style>
    </head>
    <body>
        <div id="main">
        <?php
            for($i = 0; $i < 4; $i++){
                while($scores[$i] < 35){
                    $poppedValue = explode("_", array_pop($deck));
                    $scores[$i] += $poppedValue[1];
                }
            }
            foreach ($scores as $score){
                echo $score . "</br>";
            }
        ?>

        <form>
            <input type="submit" value="Spin!"/>
        </form>
        </div>
    </body>
</html>