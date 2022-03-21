<?php
    require_once ('class_persegi_panjang.php');

    $persegipanjang = new persegipanjang(10,16);

    echo '<br>Luas Persegi Panjang : '.$persegipanjang->getLuas();
    echo '<br>Keliling Persegi Panjang : '.$persegipanjang->getKeliling();
?>