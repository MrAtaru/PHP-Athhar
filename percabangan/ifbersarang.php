<?php

$jurusan = "RPL";
$kelas = "X";

if($jurusan == "TKRO"){
    echo "Ini Jurusan TKRO<br>";
    if($kelas == "X"){
        echo "Selamat datang di kelas X TKRO";
    }
    else if($kelas == "XI"){
        echo "Selamat datang di kelas XI TKRO";
    }
    else if($kelas == "XII"){
        echo "Selamat datang di kelas XII TKRO";
    }
    else {
        echo "Maaf kelas yang anda pilih tidak tersedia !";
    }
}
else if ($jurusan == "TBSM"){
    echo "Ini Jurusan TBSM<br>";
    if($kelas == "X"){
        echo "Selamat datang di kelas X TBSM";
    }
    else if($kelas == "XI"){
        echo "Selamat datang di kelas XI TBSM";
    }
    else if($kelas == "XII"){
        echo "Selamat datang di kelas XII TBSM";
    }
    else {
        echo "Maaf kelas yang anda pilih tidak tersedia !";
    }
}
else if ($jurusan == "RPL"){
    echo "Ini Jurusan RPL<br>";
    if($kelas == "X"){
        echo "Selamat datang di kelas X RPL";
    }
    else if($kelas == "XI"){
        echo "Selamat datang di kelas XI RPL";
    }
    else if($kelas == "XII"){
        echo "Selamat datang di kelas XII RPL";
    }
    else {
        echo "Maaf kelas yang anda pilih tidak tersedia !";
    }
}
else{
    echo "Maaf kawan jurusan yang anda pilih tidak ada !";
}

?>