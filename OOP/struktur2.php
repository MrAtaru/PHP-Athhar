<?php

//sebuah class
class kucing {

    //properti
    var $ras = "Kampung";
    var $warna = "Kuning";

    //methode

    function ciri(){

        echo "Jenis Kucing adalah : ".$this->ras;
        echo "<br>";
        echo "Warna kucing adalah : ".$this->warna;
    }
    // function makan($makanan){
    //     echo "Kucing suka makan ".$makanan;
    // }
    // function minum(){
    //     echo "kucing suka minum susu";
    // }

}

//object
//instansiasi
$cetak = new kucing();

//cetak
//echo $cetak -> ciri();
echo $cetak ->ras;


?>