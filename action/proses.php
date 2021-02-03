<?php

require_once("main.php");
require_once("testulis.php");
require_once("berkas.php");
require_once("makalahpresentasi.php");
require_once("wawancara.php");

session_start();

//Menangkap value dari form
$testulisnew = $_POST['testulis'];
$berkasnew = $_POST['berkas'];
$makalahpresentasinew = $_POST['makalahpresentasi'];
$wawancaranew = $_POST['wawancara'];

if(isset($testulisnew) && isset($berkasnew) && isset($makalahpresentasinew) && isset($wawancaranew)) {
    //Membuat objek pada class masing-masing
    $main = new main();
    $testulis = new testulis();
    $berkas = new berkas();
    $makalahpresentasi = new makalahpresentasi();
    $wawancara = new wawancara();

    //Mengisi value dari masing-masing objek
    $testulis->setTesTulis($testulisnew);
    $berkas->setBerkas($berkasnew);
    $makalahpresentasi->setMakalahPresentasi($makalahpresentasinew);
    $wawancara->setWawancara($wawancaranew);

    $hasil =    (20 * $testulis->getRating()) + 
                (20 * $berkas->getRating()) + 
                (40 * $makalahpresentasi->getRating()) + 
                (20 * $wawancara->getRating());

    if($hasil > 70){
        $_SESSION['status'] = "Selamat anda Lulus";
    }else{
        $_SESSION['status'] = "Maaf anda tidak lulus";
    }

    header("location: /OOP");

}







