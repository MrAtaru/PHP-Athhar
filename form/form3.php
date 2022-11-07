<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM PERKONDISIAN</title>
</head>
<body>
    <center>
        <h1>KKM</h1>
        <form action="" method="POST">
        <table>
            <tr>
                <td>Masukan nilai</td>
                <td><input type="number" name="nilai"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="PROSES" name="proses"></td>
            </tr>
        </table>
        </form>
    </center>
</body>
</html>

<?php
if (isset($_POST["proses"])) {
    $angka = $_POST['nilai'];

    if ($angka >= 75) {
        $status = "Lulus";
    }
    else{
        $status = "Tidak Lulus";
    }
    echo "<center>";
    echo $status;
    echo "</center>";
}
?>