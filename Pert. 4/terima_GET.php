<?php
    if(isset($_GET["txNIM"])){
        echo $_GET["txNIM"];
        echo $_GET["txNAMA"];
        echo $_GET["txTGLMASUK"];
    }else{
        header("Location: pert.4Latihan01.php");
    }