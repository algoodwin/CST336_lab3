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
            $playerState = true;
            $playerNum = 0;
            while($playerState){
                if($scores[$playerNum] > 35){
                    $playerNum++;
                    if(playerNum > 3){
                        break;
                    }
                    
                }
                $poppedValue = explode("_", array_pop($deck));
                $scores[$playerNum] += $poppedValue[1];
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