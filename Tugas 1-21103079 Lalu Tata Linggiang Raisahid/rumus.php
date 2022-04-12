<?php
    if(isset($_GET["submit"])){

        $suhu = $_GET["suhu"];
        $unit = $_GET["unit"];

        if($unit == "C"){
            $result = $suhu * 9 / 5 + 32;
        } else {
            $result = ($suhu + 32) * 5 / 9;
        }

        echo "Hasil Konversi Suhu adalah " . $result;
    }