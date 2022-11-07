<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM INPUT</title>
</head>
<body>
    <form action="" method="POST">
        <center>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" value=""></td>
                </tr>
                <tr>
                    <td>kelas</td>
                    <td>:</td>
                    <td><input type="text" name="kelas" value=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="simpan" name="simpan"></td>
                </tr>
            </table>
        </center>
    </form>
      
    <br>
</body>
</html>

<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];

    echo "<center>";
    echo "<table>";
    echo "<tr>";
    echo "<td>"."Nama Anda : ".$nama."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>"."Kelas Anda : ".$kelas."</td>";
    echo "</table>";
    echo "</center>";
}