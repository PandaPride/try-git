<?php
    // Menentukan Bilangan Ganjil atau Genap    
    $angka = 2;
    $isEvenNumber = $angka % 2 == 0;
    $isOddNumber = !$isEvenNumber;
    var_dump($isEvenNumber);

    echo '<br>';
    echo '<br>';

    // Menghitung Luas Lingkaran
    $radius = 7;
    $luasLingkaran = 22/7 * $radius * $radius;
    echo "Jari-jari = $radius <br>";
    echo "Luas Lingkaran = $luasLingkaran";

    echo '<br>';
    echo '<br>';

    // Konversi Suhu
    $suhuCelsius = 30;
    $konversiKeFahrenheit = ($suhuCelsius * 9/5) + 32;
    echo "$konversiKeFahrenheit °F";
    

    echo '<br>';
    echo '<br>';

    // Menentukan Diskon Pembelian
    $harga = 100000;
    $diskon = 50;
    $totalHargaSetelahDisk = $harga - ($harga * ($diskon/100));
    echo $totalHargaSetelahDisk;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRYYY</title>
</head>
<body>
    <h1>Ini perhitungan banget</h1>
    <p>
        <?= 
            $totalHargaSetelahDisk
        ?>
    </p>
</body>
</html>
