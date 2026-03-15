<?php
    include "Mahasiswa.php";

    $mahasiswaTI = new Mahasiswa();
    $mahasiswaTI->setData('A11.2024.15979', 'Hanif Purwo Yuono', 'Teknik Informatika');

    $mahasiswaSI = new Mahasiswa();
    $mahasiswaSI->setData('A12.2024.15979', 'Sabta Adi', 'Sistem Informasi');

    $mahasiswaTI->tampilkanData();
    $mahasiswaSI->tampilkanData();
?>