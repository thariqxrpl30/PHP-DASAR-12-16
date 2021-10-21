<?php 

    // // array dimensi
    // $nama = array("joni","tejo","budi","siti");
    // var_dump ($nama);
    // echo "<br>";
    // echo $nama [5];

    // echo "br";
    // for ($i=0; $i < 6; $i++) { 
    //     // echo $i;
    //     echo $nama [$i]. "<br>";
    // }

    // foreach ($nama as $) {
    //     echo $key. '<br>';
    // }

    // aray asosiatif
    $nama = array(
        "joni" => "Surabaya",
        "Budi" => "Malang",
        "Tejo" => "Jakarta",
        "siti" => "sidoarjo"
    );

    $nama['joni']="Surabaya";
    $nama['budi']="Malang Raya";
    $nama['tejo']="jakarta";
    $nama['joni']="Sidoarjo";
    $nama['edi']="Semarang";

    var_dump($nama);

    echo "<br>";

    // echo $nama ['budi'];

    foreach ($nama as $k => $v) {
        echo $k. "=>". $v;

        echo "<br>";

    }
?>