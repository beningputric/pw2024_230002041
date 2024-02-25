<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
for ($row = 1; $row <= 5; $row++) {
    echo "<div style='display: flex;'>";
    for ($col = 1; $col <= 5; $col++) {
        $total = $row + $col;
        if ($total % 2 == 0) {
            echo "<div style='width: 40px; border: 1px solid black; height: 40px; background-color: black;'></div>";
        } else {
            echo "<div style='width: 40px;  border: 1px solid black;height: 40px; background-color: white;'></div>";
        }
    }
    echo "</div>";
}
?>
</body>
</html>