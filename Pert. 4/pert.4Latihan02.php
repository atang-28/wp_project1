<?php
    include_once("pert4prosedur.php");
    
    if(isset($_POST["txAlas"])){
        $alas = $_POST["txAlas"];
        $tinggi = $_POST["txTinggi"];
        $hsl = hitungluas($alas, $tinggi);
    }
?>
<!DOCTYPE html>
    <head>
        <title>Hitung Luas Segitiga</title>
    </head>
    <body>
        
        <h3>Hitung Luas Segitiga</h3>

        <form method="post">
            Inputkan Nilai : <br>
            Alas <br>
            <input type="number" name="txAlas" value="<?=$alas;?>"><br>
            Tinggi <br>
            <input type="number" name="txTinggi" value="<?=$tinggi;?>"><br>
            Luas <br>
            <input type="number" name="txHasil" value="<?=$hsl;?>" disabled><br>
            <br>
            <button type="submit">Hitung Luas Segitiga</button>
        </form>
    </body>
</html>