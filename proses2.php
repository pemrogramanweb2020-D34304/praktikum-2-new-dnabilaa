<?php
  
  if(isset($_GET['a'])){

    $a = $_GET['a'];
    
    echo "Nama Yang dicari $a <br>";
    
    $data = array(
        array(
            "nama"          => "Arsene Lupin",
            "nik"           => "1234",
            "jenis_kelamin" => "male",
            "tgl_lahir"     => "1902-03-23"
        ),
        array(
            "nama"          => "Sherlock Holmes",
            "nik"           => "4321",
            "jenis_kelamin" => "male",
            "tgl_lahir"     => "1812-01-11"
        ),
        array(
            "nama"          => "Irene Adler",
            "nik"           => "7890",
            "jenis_kelamin" => "female",
            "tgl_lahir"     => "1232-04-13"
        )
    );
    
    $y=0;
    $n=0;
    
    foreach($data as $u){
    if(strtoupper($u["nama"]) == strtoupper($a)){
    $y=1;
    $n=$u;
    } 
    }
    
    if($y){
        echo "<b>".$a."</b><br>";
        echo "NIK: ".$b['nik']."<br>";
        echo "Kelamin: ".$b['jenis_kelamin']."<br>";
        echo "Tanggal Lahir: ".$b['tgl_lahir']."<br>";

    } else{
    echo "[".$a."] <b>Tidak Ketemu</b> <br>";
    }
    
    }
    
    ?>