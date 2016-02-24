<!DOCTYPE html>
<html>
<head>
</head>
<body style="background-color:#2B3336;">
<pre>
<?php
//Pedale project
$couleurpedale = array("#FF85BC","#CCFF00","#FFCE36","#01FFCC","#FFEB88","#FF8584"); //6
$art = file('asciiart.txt', FILE_IGNORE_NEW_LINES );
foreach($art as $line){
        for($i = 0; $i < strlen($line); $i++){
                $number = $i % count($couleurpedale);
                echo '<span style="color:'.$couleurpedale[$number].';">'.$line[$i].'</span>';
        }
        echo PHP_EOL;
}
?>
</pre>
</body>
</html>
