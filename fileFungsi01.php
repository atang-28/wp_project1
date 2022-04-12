<?php
    include_once("pert3_fungsi01.php");

?><!DOCTYPE html>
<html>
    <head>
        <title>Menggunakan Fungsi dari luar File</title>
    </head>
    <body>
        <?php
            about(" Atang");

            $hsl = hitung(10,6);
            echo "<br> Bil 1 + Bil 2 = " .$hsl;
        ?>
        
    </body>
</html>