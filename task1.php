<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        span {
            color: green;
            font-size: calc(5 * 1rem); /* Розмір тексту в ем, вираз вираховується як в js */
        }
    </style>
</head>
<body>
<?php
// Лічильник парних чисел
$count = 0;
// Змінні для суми та середнього значення
$sum = 0;
$average = 0;

echo "<p>";

// Пошук і виведення перших 10 парних чисел
for ($i = 1; ; $i++) {
    if ($i % 2 == 0) {
        $count++;
        $sum += $i;
        echo "<span style='font-size: " . ($count * 5) . "px;'>$i</span> ";
    }

    if ($count == 10) {
        break;
    }
}

echo "</p>";

// Розрахунок середнього значення
if ($count > 0) {
    $average = $sum / $count;
}

echo "<p>Сума парних чисел: $sum</p>";
echo "<p>Середнє значення парних чисел: $average</p>";
?>
</body>
</html>