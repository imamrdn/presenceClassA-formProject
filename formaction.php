<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name   = $_POST['nama'];
        $nim    = $_POST['nim'];
        $email  = $_POST['email'];
        $class  = $_POST['class'];
        $address= $_POST['address'];
        $enter  = "\n";

        if (!empty($name) && !empty($nim)) {
            if (!empty($email) && !empty($class)) {
                if (!empty($address)){
                    echo "<h1>Presensi Berhasil</h1>";
                    $myfile = fopen("data.txt", "a+");
                    fwrite($myfile, "$name | $nim | $email | $class | $address $enter");
                    fclose($myfile); 
                } else {
                    echo "Data belum lengkap, presensi Anda Gagal";
                }     
            } else {
                echo "Data belum lengkap, presensi Anda Gagal";
            } 
        } else {
            echo "Data belum lengkap, presensi Anda Gagal";
        }

        
    }

    echo "<br><a href='data.php'>Lihat Presensi</a><br>";
    echo "<a href='index.php'>Isi Presensi</a>";
?>
