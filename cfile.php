<?php

function gen_io($id=0,$data="") {


    $file_name="./data".$id.".txt";
    $file = fopen($file_name,"w");
    echo fwrite($file,$data);
    fclose($file);
}

$file_data = fopen("data.dtd","r");
$data = fread($file_data,filesize("data.dtd"));

for ($x = 0 ; $x < 10 ; $x++ ) {
    if ($x == 1 ) {
        echo gen_io($x,$data);
    }
    echo "<br>";
}

fclose($file_data);

?> 

