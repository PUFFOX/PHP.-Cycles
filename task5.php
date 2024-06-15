<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p {
            font-size: 16px;
            color: blue;
        }
    </style>
</head>
<body>
<?php
// Число у десятковій системі
$decimalNumber = 123;

// Переведення у двійкову систему
$binaryNumber = decbin($decimalNumber);

// Виведення результату
echo "<p>Десяткове число $decimalNumber у двійковій системі: $binaryNumber</p>";
?>
</body>
</html>