<?php
    if(isset($_POST["kirimdata"])){
        print_r($_FILES["fldata"]);
        $path = "../Img/gambar/";//folder penyimpanan
        $nmfile = $path .  basename($_FILES["fldata"]["name"]);//nama file yang diupload

        $imgtype = strtolower (pathinfo($nmfile,PATHINFO_EXTENSION));

        if((($imgtype == "png") || ($imgtype == "jpg")) || ($imgtype == "gif")) {
            move_uploaded_file($_FILES["fldata"]["tmp_name"], $nmfile);

            echo '<img src="'.$nmfile.'">';
        }
    }