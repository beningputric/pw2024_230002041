<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$nama_depan = "Bening Putri";
$nama_belakang = "Cahyani A";

for ($nilai_awal = 1; $nilai_awal <= 100; $nilai_awal++) {

    if ($nilai_awal % 3 == 0 && $nilai_awal % 5 == 0) {
        echo "$nama_depan $nama_belakang";
        
    }elseif ($nilai_awal % 3 == 0 ) {
        echo "$nama_depan ";
    
    } elseif ($nilai_awal % 5 == 0) {
        echo "$nama_belakang ";

    }
    
     else {
        echo "$nilai_awal";
    }
    echo "<br>";
}
?>
</body>
</html>