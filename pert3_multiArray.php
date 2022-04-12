<?php
    $mhs = array(
            array("211","Atang","Lombok"),
            array("212","Lalu","Bali"),
            array("213","Tata","Denpasar"),
            array("214","Linggiang","Panjer")
    );

    echo "Nama panggilan saya adalah " . $mhs[0][1] . " dengan NIM " .$mhs[0][0]. " berasal dari " .$mhs[0][2];

   echo"<br> <br>";

     for($i=0;$i<4;$i++){
        echo "Nama saya " .$mhs[$i][1];
        echo " dengan Nim " .$mhs[$i][0];
        echo " berasal dari " .$mhs[$i][2];
        echo "<br>";
     };
