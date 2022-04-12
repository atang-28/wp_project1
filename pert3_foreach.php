<?php
    $buah = array("salak","duku","apel","jeruk",);

    foreach($buah as $isi){
        echo "Buah : ".$isi."<br>";
    }

    echo "<br>Menggunakan for<br>";
    for($i=0;$i<4;$i++){
        echo "Buah : ".$buah[$i]."<br>";
    }