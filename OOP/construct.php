<?php

class contoh {

    function __construct(){
        echo "<center>";
        echo "Assalamualaikum<br>";
        echo "</center>";
    }

    function perkenalan($nama){
        echo "Nama saya ".$nama."<br>";
    }

    function __destruct(){
        echo "<center>";
        echo "Hatur nuhun";
        echo "</center>";
    }


}

$cetak = new contoh();
echo "<center>";
$cetak -> perkenalan("Athhar");
echo "</center>";

?>