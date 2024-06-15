<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .ellipse {
            position: absolute;
            border: 2px solid black;
            border-radius: 50%;
        }
    </style>
</head>
<body>
<?php
// Початкові значення для розміру еліпса
$size = 20;
// Початкові координати
$x = 50;
$y = 50;

// Генерація 10 еліпсів
for ($i = 1; $i <= 10; $i++) {
    // Виводимо еліпс у вигляді div з класом ellipse
    echo "<div class='ellipse' style='width: " . $size . "px; height: " . ($size / 2) . "px; left: " . $x . "px; top: " . $y . "px;'></div>";
    
    // Збільшуємо розмір еліпса на 15px, але не більше 20px
    $size += 15;
    
    // Збільшуємо координати для наступного еліпса
    $x += 10;
    $y += 10;
}
?>
</body>
</html>