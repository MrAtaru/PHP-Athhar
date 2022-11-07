<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form biodata</title>
</head>
<body>
    <form action="" method="POST">
        <center>
            <h1>FORM BIODATA DIRI</h1>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Tempat lahir</td>
                    <td>:</td>
                    <td><input type="text" name="tempat_lahir"></td>
                </tr>
                <tr>
                    <td>Tanggal lahir</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal_lahir" id=""></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jk" value="Laki-laki" id="">Laki-laki
                        <input type="radio" name="jk" value="Perempuan" id="">Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="alamat" id="" cols="18" rows="4"></textarea></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>
                        <select name="agama" id="">
                            <option value="">---SILAHKAN PILIH---</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Pendidikan Terakhir</td>
                    <td>:</td>
                    <td>
                        <select name="pend_terakhir" id="">
                            <option value="">---SILAHKAN PILIH---</option>
                            <option value="TK">TK</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="SMK">SMK</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S1</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>
                        <select name="status" id="">
                            <option value="">---SILAHKAN PILIH---</option>
                            <option value="sudah Menikah">Sudah Menikah</option>
                            <option value="Belum Menikah">Belum Menikah</option>
                            <option value="Duda">Duda</option>
                            <option value="Janda">Janda</option>
                            <option value="Pelajar">Pelajar</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Cita-cita</td>
                    <td>:</td>
                    <td>
                        <select name="cita" id="">
                            <option value="">---SILAHKAN PILIH---</option>
                            <option value="Programmer">Programmer</option>
                            <option value="Atlet">Atlet</option>
                            <option value="Chef">Chef</option>
                            <option value="Pengusaha">Pengusaha</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Kata-kata Bijak</td>
                    <td>:</td>
                    <td><textarea name="kata_bijak" id="" cols="18" rows="4"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="kirim" value="Kirim"></td>
                </tr>
            </table>
        </center>
    </form>
</body>
</html>
<?php
    echo "<hr>";

if (isset($_POST['kirim'])) {
    $nama = $_POST['nama'];
    $tempat = $_POST['tempat_lahir'];
    $tanggal = $_POST['tanggal_lahir'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];
    $pend = $_POST['pend_terakhir'];
    $status = $_POST['status'];
    $cita = $_POST['cita'];
    $kb = $_POST['kata_bijak'];

    echo "<center>";
    echo "<table>";
    echo "<tr>";
    echo "<td>Nama Anda</td>";
    echo "<td>:</td>";
    echo "<td>".$nama."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Tempat Lahir</td>";
    echo "<td>:</td>";
    echo "<td>".$tempat."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Tanggal Lahir</td>";
    echo "<td>:</td>";
    echo "<td>".$tanggal."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Jenis Kelamin</td>";
    echo "<td>:</td>";
    echo "<td>".$jk."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Alamat</td>";
    echo "<td>:</td>";
    echo "<td>".$alamat."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Agama</td>";
    echo "<td>:</td>";
    echo "<td>".$agama."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Pendidikan Terakhir</td>";
    echo "<td>:</td>";
    echo "<td>".$pend."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Status</td>";
    echo "<td>:</td>";
    echo "<td>".$status."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Cita-cita</td>";
    echo "<td>:</td>";
    echo "<td>".$cita."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Kata-kata Bijak</td>";
    echo "<td>:</td>";
    echo "<td>".$kb."</td>";
    echo "</tr>";
    echo "</table>";
    echo "</center";
}

