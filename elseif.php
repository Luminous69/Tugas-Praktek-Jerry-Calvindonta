<html>

<head>
</head>

<body>
    <?php
    //1
    $baterai = 97;
    if ($baterai == 100) {
        echo "Baterai Anda Penuh<br>";
    } else {
        echo "Baterai Anda Tidak Penuh<br>";
    }

    //2
    $tinggi = 180;
    if ($tinggi > 175) {
        echo "Kamu Tinggi<br>";
    } else {
        echo "Kamu Pendek<br>";
    }

    //3
    $berat = 80;
    if ($berat > 80) {
        echo "Kamu Berat<br>";
    } else {
        echo "Kamu Ringan<br>";
    }

    //4
    $gaji = 50000000;
    if ($gaji > 10000000) {
        echo "Gaji Kamu Besar<br>";
    } else {
        echo "Gaji Kamu Lumayan<br>";
    }

    //5
    $jarak = 200; //meter
    if ($jarak > 10000) {
        echo "Rumah Kamu Jauh Dari Kampus<br>";
    } else{
        echo "Rumah Kamu Lumayan Dekat Dari Kampus<br>";
    }
    ?>
</body>

</html>