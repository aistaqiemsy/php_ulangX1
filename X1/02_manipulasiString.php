<?php
    $namaDepan = "Muhammad";
    $namaTengah = "Ridho";
    $namaBelakang = "Hafiz";

    //tampilkan satu-satu
    echo "Nama Depan : $namaDepan<br>";
    echo "Nama Tengah : $namaDepan<br>";
    echo "Nama Belakang : $namaDepan<br>";

    //gabung
    echo "<hr>";
    echo $namaDepan." ".$namaTengah." ".$namaBelakang;

    echo "<br>";

        $balik = strrev($namaDepan);
        echo $balik;



?>