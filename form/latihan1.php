<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HASIL UJIAN NASIONAL</title>
    <style>
        body{
            font-family : Calibri;
        }

    </style>
</head>
<body>
    <center>
        <h1>HASIL UJIAN NASIONAL</h1>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Matematika</td>
                    <td>:</td>
                    <td><input type="number" name="mtk" max="100" min="0"></td>
                </tr>
                <tr>
                    <td>Bahasa Indonesia</td>
                    <td>:</td>
                    <td><input type="number" name="b_indo" max="100" min="0"></td>
                </tr>
                <tr>
                    <td>Bahasa Inggris</td>
                    <td>:</td>
                    <td><input type="number" name="b_ing" max="100" min="0"></td>
                </tr>
                <tr>
                    <td>Produktif</td>
                    <td>:</td>
                    <td><input type="number" name="produktif" max="100" min="0"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="proses" value="PROSES"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>

<?php

echo "<hr>";

if (isset($_POST["proses"])) {
    $nama   = $_POST['nama'];
    $emteka = $_POST['mtk'];
    $bindo  = $_POST['b_indo'];
    $bing   = $_POST['b_ing'];
    $prod   = $_POST['produktif'];

    $rata = ($emteka + $bindo + $bing + $prod) / 4;

    if ($rata >= 75) {
        $status = "Lulus";
    }else{
        $status = "Tidak Lulus";
    }

    echo "<center>";
    echo "<table>";
    echo "<tr>";
    echo "<td>Nama Anda</td>";
    echo "<td>:</td>";
    echo "<td>".$nama."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Nilai Matematika</td>";
    echo "<td>:</td>";
    echo "<td>".$emteka."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Nilai Bahasa Indonesia</td>";
    echo "<td>:</td>";
    echo "<td>".$bindo."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Nilai Bahasa Inggris</td>";
    echo "<td>:</td>";
    echo "<td>".$bing."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Nilai Produktif</td>";
    echo "<td>:</td>";
    echo "<td>".$prod."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Nilai Akhir</td>";
    echo "<td>:</td>";
    echo "<td>".$rata."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Status</td>";
    echo "<td>:</td>";
    echo "<td><p><i><b>".$status."</b></i></p></td>";
    echo "</tr>";
    echo "</table>";
    echo "</center>";
}
?>