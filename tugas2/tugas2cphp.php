<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
for ($i = 10; $i >= 1; $i--) {
    echo "<div style='display: flex;'>";
    for ($j = 1; $j <= $i; $j++) {
        echo "<div style='width: 20px; height: 20px; border: 1px solid black; text-align: center; background-color:red'>$j</div>";
    }
    echo "</div>";
}
?>
</body>
</html>