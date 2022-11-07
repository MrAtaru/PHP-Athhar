<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM ARITMATIKA</title>
</head>
<body>
    <center>
        <h1>ARITMATIKA</h1>
        <form action="" method="POST">
        <table>
            <tr>
                <td>Bilangan ke 1</td>
                <td>:</td>
                <td><input type="number" name="bilangan_1" id=""></td>
            </tr>
            <tr>
                <td>Bilangan ke 2</td>
                <td>:</td>
                <td><input type="number" name="bilangan_2" id=""></td>
            </tr>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="HITUNG"></td>
            </tr>
        </table>
        </form>
    </center>
</body>
</html>

<?php
    echo "<hr>";
if (isset($_POST['submit'])) {
    $angka1 = $_POST['bilangan_1'];
    $angka2 = $_POST['bilangan_2'];

    $hasil_penjumlahan = $angka1 + $angka2;
    $hasil_pengurangan = $angka1 - $angka2;
    $hasil_perkalian = $angka1 * $angka2;
    $hasil_pembagian = $angka1 / $angka2;

    echo "<center>";

    echo    "<table>";
    echo            "<tr>";
    echo              "<td>Hasil penjumlahan</td>";
    echo              "<td>:</td>";
    echo              "<td>".$hasil_penjumlahan."</td>";
    echo          "</tr>";
    echo          "<tr>";
    echo               "<td>Hasil penngurangan</td>";
    echo               "<td>:</td>";
    echo               "<td>".$hasil_pengurangan."</td>";
    echo          "</tr>";
    echo          "<tr>";
    echo              "<td>Hasil perkalian</td>";
    echo              "<td>:</td>";
    echo              "<td>".$hasil_perkalian."</td>";
    echo          "</tr>";
    echo           "<tr>";
    echo               "<td>Hasil pembagian</td>";
    echo               "<td>:</td>";
    echo               "<td>".$hasil_pembagian."</td>";
    echo          "</tr>";
    echo      "</table>";
 
    echo "</center>";
}

?>