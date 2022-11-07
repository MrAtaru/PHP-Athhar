<?php
class bangundatar {

    var $luaspersegi = 0;
    var $luaspersegipanjang = 0;
    var $luassegitiga = 0;
    var $luaslingkaran = 0;
    var $luasjajargenjang =0;


function luaspersegi($sisi){

    $this -> luaspersegi = $sisi * $sisi;
    echo "<center>";
    echo "<h4>Luas Persegi</h4>";
    echo "sisi nya : ".$sisi;
    echo "<br>";
    echo "luas nya : ".$luas;
    echo "</center>";
    echo "<hr>";

}

function luaspersegipanjang($sisipanjang,$sisipendek){

    $this -> luaspersegipanjang = $sisipanjang * $sisipendek;
    echo "<center>";
    echo "<h4>Luas Persegi Panjang</h4>";
    echo "sisi nya : ".$sisipanjang." dan ".$sisipendek;
    echo "<br>";
    echo "luas nya : ".$luas;
    echo "</center>";
    echo "<hr>";

}

function luassegitiga($alas,$tinggi){

    $this -> luassegitiga = 0.5 * $alas * $tinggi;
    echo "<center>";
    echo "<h4>Luas Segitiga</h4>";
    echo "alas dan tinggi nya : ".$alas." dan ".$tinggi;
    echo "<br>";
    echo "luas nya : ".$luas;
    echo "</center>";
    echo "<hr>";

}

function luaslingkaran($jari){

    $this -> luaslingkaran = 3.14 * $jari * $jari;
    echo "<center>";
    echo "<h4>Luas Lingkaran</h4>";
    echo "jari-jari nya : ".$jari;
    echo "<br>";
    echo "luas nya : ".$luas;
    echo "</center>";
    echo "<hr>";

}

function luasjajargenjang($alas,$tinggi){

    $this -> luasjajargenjang = $alas * $tinggi;
    echo "<center>";
    echo "<h4>Luas Jajargenjang</h4>";
    echo "Alas dan tinggi nya : ".$alas." dan ".$tinggi;
    echo "<br>";
    echo "luas nya : ".$luas;
    echo "</center>";
    echo "<hr>";

}
}

luaspersegi(10);
luaspersegipanjang(10,5);
luassegitiga(10,15);
luaslingkaran(20);
luasjajargenjang(20,15);
?>