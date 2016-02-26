<?php
$art = file('asciiart.txt', FILE_IGNORE_NEW_LINES);
$badAssArt = '';
$spanTag = '<span class="magnifico" style="color:#%s;">%s</span>';
foreach ($art as $line) {
    foreach (str_split($line) as $char) {
        $badAssArt .= sprintf($spanTag, substr(md5(rand()), 0, 6), $char);
    }
    $badAssArt .= PHP_EOL;
}
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        @keyframes open_your_eyes {
            to {
                color: #2B3336;
            }
        }
        .magnifico {
            animation-name: open_your_eyes;
            animation-duration: 1s;
            animation-iteration-count: infinite;
        }
    </style>
</head>
<body style="background-color:#2B3336;">
<pre style="position: absolute;  top: 50%;  left: 50%;  transform: translate(-50%, -50%);">
<?= $badAssArt ?>
<main>
<h3>Nothing really matters - nothing really matters to me<h3>
<marquee behavior="scroll" direction="left" style="color:#ffcc00">Anyway the wind blows...</marquee>
</main>
</pre>
</body>
</html>
