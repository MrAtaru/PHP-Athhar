<?php

class kendaraan{

}

class motor extends kendaraan{

    function Menyala(){
        echo "Motor bisa jalan";
    }

}

$cetak = new motor();

$cetak -> Menyala();

?>