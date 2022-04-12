<?php
    if(isset($_POST["txNIM"])){
        echo $_POST["txNIM"];
        echo $_POST["txNAMA"];
        echo $_POST["txTGLMASUK"];
    }else{
        header("Location: pert.4Latihan01.php");
    }