<?php
session_start();
if(isset($_SESSION['matchCount'])) { // Checks whether the session exists
    
    $_SESSION['matchCount'] = 1;
}

$deck = array();
$suits = array("clubs","spades","hearts","diamonds");
$scores = array(0, 0, 0, 0);

for ($i = 0; $i < 4; $i++) {            //sets the suit 
    for ($j = 1; $j <= 13; $j++) {      //sets the value
    
        $deck[] = $suits[$i] . "_" . $j;
    }
    
}

shuffle($deck);

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
        <div id="name">
            <h1> Silverjack </h1>
        </div>
        <div id ='pic_container'>
        <?php 
     ///Before the session starts to randomize the array////
        for($i =0; $i<4; $i++)
        {
        $imageURLs[$i]= $i;
        }
        
        shuffle($imageURLs);
        
        for($i =0; $i<4; $i++)
        {
            echo "<img src = 'people/$imageURLs[$i].jpg'/>";
            while($scores[$i] < 35){
                    $poppedValue = explode("_", array_pop($deck));
                    echo '<img src ="cards/'.$poppedValue[0].'/'.$poppedValue[1].'.png">';
                    $scores[$i] += $poppedValue[1];
                }
                echo $scores[$i] . "<br/>";
                unset($imageURLs[$randomIndex]);
            }
           
        $_SESSION['matchcount'] += 1;
          echo "Matches this session: " + $_SESSION['matchcount'] . "<br/>";
          //Determines the highest value between players
          $maxScore = $scores[0];
          for($i = 0; $i < 4; $i++) {
              if($scores[$i] > $maxScore) {
                  $maxScore = $scores[$i];
              }
          }
          //Determines winners for the round
          $winner = array(0, 0, 0, 0);
          for($i = 0; $i < 4; $i++) {
              if($scores[$i] == $maxScore) {
                  $winner[$i] = 1;
              }
          }
          //Adds the scores together
          $totalPoints = 0;
          for($i = 0; $i < 4; $i++) {
              if($winner[$i] == 0) {
                  $totalPoints += $scores[$i];
              }
          }
          //Assigns points to the winners
          for($i = 0; $i < 4; $i++) {
              if($winner[$i] == 1) {
                  $_SESSION[''] += $totalPoints;
              }
          }
        ?>
        <form>
            <input type="submit" value="Replay!"/>
        </form>
        </div>
    </body>
</html>