<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
function urutanangka($angka){
    $baris = 1; 
    
    for ($i = 1; $i <= $angka; $i++) {
        for ($j = 1; $j <= $i; $j++) { 
            echo $baris . " "; 
            $baris++;  
        }
        echo "<br>"; 
    }
}

echo urutanangka(5); 
?>
</body>
</html>