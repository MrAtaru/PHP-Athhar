<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BESTIE KELAS 11 RPL 1</title>
</head>
<body>
<?php

    $bestie = [
        [
            "nama" => "Ridwan",
            "tanggal_lahir" => "3 mei 2006",
            "kelas" => "XI RPL 1",
            "hobi" => [
                ["detail_hobi" => "bersepeda"],
                ["detail_hobi" => "Membaca buku"]
            ],
            "cita" => "Jadi Programmer"
        ]
        // [
        //     "nama" => "Septian",
        //     "tanggal_lahir" => "11 juli 2005",
        //     "kelas" => "XI RPL 1",
        //     "hobi" => [
        //         ["detail_hobi" => "Bermain Game"],
        //         ["detail_hobi" => "Mengaji"]
        //     ],
        //     "cita" => "Jadi raja iblis"
        // ],
        // [
        //     "nama" => "Devin",
        //     "tanggal_lahir" => "2 desember 2005",
        //     "kelas" => "XI RPL 1",
        //     "hobi" => [
        //         ["detail_hobi" => "Bermain Bola"],
        //         ["detail_hobi" => "Memasak"]
        //     ],
        //     "cita" => "Jadi orang sukses"
        // ],
        // [
        //     "nama" => "Dimas",
        //     "tanggal_lahir" => "27 mei 2006",
        //     "kelas" => "XI RPL 1",
        //     "hobi" => [
        //         ["detail_hobi" => "Turu"],
        //         ["detail_hobi" => "Makan"]
        //     ],
        //     "cita" => "Jadi orang sukses"
        // ],
        // [
        //     "nama" => "Ikbal",
        //     "tanggal_lahir" => "15 november 2005",
        //     "kelas" => "XI RPL 1",
        //     "hobi" => [
        //             ["detail_hobi" => "Main Bola"],
        //             ["detail_hobi" => "Menjahit"]
        //         ],
        //     "cita" => "TNI"
        // ]
    ];

    echo "<h1>BESTIE KELAS 11 RPL 1</h1>";

    foreach ($bestie as $data){
        echo "Nama : ".$data["nama"]."<br>";
        echo "Tanggal Lahir : ".$data["tanggal_lahir"]."<br>";
        echo "Kelas : ".$data["kelas"]."<br>";
        echo "<ul>";
        foreach ($data["hobi"] as $hobi){
            echo "<li>".$hobi["detail_hobi"]."</li>";
        };
        echo "</ul>";
        echo "<hr>";
    };

?>
</body>
</html>

