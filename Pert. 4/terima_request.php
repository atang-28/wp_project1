<?php
    if(isset($_REQUEST["txNIM"])){
        echo $_REQUEST["txNIM"];
        echo $_REQUEST["txNAMA" ];
        echo $_REQUEST["txTGLMASUK" ];
    }else{
        header("Location: pert.4Latihan01.php");
    }