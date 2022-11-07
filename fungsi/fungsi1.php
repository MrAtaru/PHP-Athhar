<?php

function perkenalan($nama,$tempat_lahir,$tanggal_lahir,$jk,$agama){



    echo "<br>";
    echo "<center>";
    echo "<table>";
    echo "<tr>";
    echo "<td>Nama</td>";
    echo "<td>:</td>";
    echo "<td>".$nama."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Tempat Lahir</td>";
    echo "<td>:</td>";
    echo "<td>".$tempat_lahir."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Tanggal Lahir</td>";
    echo "<td>:</td>";
    echo "<td>".$tanggal_lahir."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Jenis Kelamin</td>";
    echo "<td>:</td>";
    echo "<td>".$jk."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Agama</td>";
    echo "<td>:</td>";
    echo "<td>".$agama."</td>";
    echo "</tr>";
    echo "</table>";
    echo "</center>";
    

}

perkenalan("Muhammad Athhar Malika Putra","Bandung","6 Mei 2022","Laki-Laki","Islam");

?>