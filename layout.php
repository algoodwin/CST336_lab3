<!DOCTYPE html>

<?php



?>

<html>
    <head>
        <title> 
        Silverjack
        </title>
        <link href="css/layout.css" rel="stylesheet" type="text/css" />
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
           unset($imageURLs[$randomIndex]);
            echo "</br>";
        }
        ?>
        
    </div>
    
    
    </body>
</html>







