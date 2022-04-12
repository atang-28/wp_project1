<?php
    //print_r($_FILES["fldata"]);

    if(isset($_POST["kirimfile"])){
        $jdata = count($_FILES["fldata"]["name"]);
        print_r($_FILES["fldata"]);
        $path = "../Img/gambar/";//folder penyimpanan

        for($i=0; $i<$jdata;$i++){
            $nmfile = $path .  basename($_FILES["fldata"]["name"][$i]);//nama file yang diupload
            $imgtype = strtolower (pathinfo($nmfile,PATHINFO_EXTENSION));

            if((($imgtype == "png") || ($imgtype == "jpg")) || ($imgtype == "jpeg")) {
                move_uploaded_file($_FILES["fldata"]["tmp_name"][$i], $nmfile);

                echo '<img src="'.$nmfile.'">';
            }
        }
    }