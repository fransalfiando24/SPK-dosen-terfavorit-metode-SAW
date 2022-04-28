<?php
    include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SPK - Dosen Terfavorit</title>
</head>
<body>
    <?php
    if ($_GET["p"] == "login") {
        include "login.php";
    }
    else if ($_GET["p"] == "dashboard") {
        include "dashboard.php";
    }
    else if ($_GET["p"] == "alternatif") {
        include "alternatif.php";
    }
    else if ($_GET["p"] == "alternatifdel") {
        include "alternatifdel.php";
    }
    else if ($_GET["p"] == "kriteria") {
        include "kriteria.php";
    }
    else if ($_GET["p"] == "penilaian") {
        include "penilaian.php";
    }
    else if ($_GET["p"] == "normalisasi") {
        include "normalisasi.php";
    }
    else if ($_GET["p"] == "perhitunganbobot") {
        include "perhitunganbobot.php";
    }
    else if ($_GET["p"] == "perengkingan") {
        include "perengkingan.php";
    }
    else{
        include "home.php";
    }
        
    ?>
</body>
</html>