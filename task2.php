<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function isPrime($number) {
    // 1 та від'ємні числа не є простими
    if ($number <= 1) {
        return false;
    }

    // Перевірка чи є число простим
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

$number = 17; // Змінна для перевірки на простоту

if (isPrime($number)) {
    echo "<p>$number — Просте</p>";
} else {
    echo "<p>$number — Складне</p>";
}
?>
</body>
</html>