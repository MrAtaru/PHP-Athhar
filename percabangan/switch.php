<?php

$lampu = "hijau";

switch($lampu){
    case "merah":
        echo "Berhenti";
    break;

    case "kuning":
        echo "Bersiap siap";
    break;

    case "hijau":
        echo "Maju";
    break;

    default:
        echo "Maaf Lampu yang anda pilih tidak ada !";
}

?>