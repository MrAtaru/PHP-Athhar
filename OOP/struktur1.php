<?php

//sebuah class
class kucing {

    //properti
    var $ras;
    var $warna;

    //methode
    function makan($makanan){
        echo "Kucing suka makan ".$makanan;
    }
    function minum(){
        echo "kucing suka minum susu";
    }

}

//object
//instansiasi
$cetak = new kucing();

//cetak
echo $cetak -> makan("nasi");
echo "<br>";
echo $cetak -> minum();

?>