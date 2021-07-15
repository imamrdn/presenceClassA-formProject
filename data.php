<?php
    echo "<h1>Presensi<h1>";
    $fp = fopen("data.txt", "r");
    echo "<table border=1 width=70%>";
    echo "<tr><th>Nama</th><th>NIM</th><th>Email</th><th>Kelas</th><th>Alamat</th></tr>";
    while ($isi = fgets($fp)){
        $pisah = explode("|", $isi);
        echo "<tr><td>$pisah[0]</td><td>$pisah[1]</td><td>$pisah[2]</td><td>$pisah[3]</td><td>$pisah[4]</td></tr>";
    }
    echo "</tabel>";
?>

