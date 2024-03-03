<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
echo "<h4>menghitung luas lingkaran </h4>";
function hitungluaslingkaran($r){
    $luas =M_PI*$r*$r;
    echo "jari jari : $r cm<br>";

return $luas;
}    
echo "luas lingkaran:" . hitungluaslingkaran(10);

echo "<hr>";

echo "<h4>menghitung keliling lingkaran </h4>";

function hitungkelilinglingkaran($r){
    $keliling=2*M_PI*$r;
    echo "jari jari : $r cm <br>";
    return $keliling;

}
echo "keliling lingkaran:" . hitungkelilinglingkaran(20);

?>
</body>
</html>