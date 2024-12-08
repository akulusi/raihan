<?php
function salam($waktu = "datang", $nama ="admin") {
    return "Selamat $waktu, $nama!";
}

 ?>

<!DOCTYPE html>

<html>
 <head>
<title>Latihan Function</title>

 </head>
<body>
<h1> <?=salam("Malam", "lusii"); ?></h1>

</body>

 </html>