
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Suhu</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body class="mt-5 ms-4">
    
    <h1>Konversi Suhu :</h1>

    <form method="post" action="tugas1.php">
        <input type="radio" name="unit" value="C">Celsius Ke Fahrenheit
        <input type="radio" name="unit" value="F">Fahrenheit Ke Celsius <br><br>
        <input id="hsl" type="number" name="suhu" value="<?=$suhu;?>"><br>

        <?php
            if(isset($_POST["submit"])){

            $suhu = $_POST["suhu"];
            $unit = $_POST["unit"];

            if($unit == "C"){
                $result = ($suhu * 9) / 5 + 32;
            } else {
                $result = ($suhu - 32) * 5 / 9;
            }

            if($unit == "C"){
                echo "F = ( C x 9/5 ) + 32 <br> F = " . $result;
            } else {
                echo "C = ( F - 32 ) x 5/9 <br> C = " . $result;
            }
        }
        ?>
        <br>
        <input class="bg-primary border-0 text-white fs-4 px-3" id="sbm" type="submit" name="submit" value="Konversi">
    </form>
</body>
</html>