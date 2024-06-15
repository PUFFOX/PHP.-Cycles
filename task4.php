<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
function countNumbersWithUniqueDigits() {
    $count = 0;

    for ($num = 1000; $num <= 9999; $num++) {
        $digits = str_split($num); // Розбиваємо число на цифри

        // Перевіряємо, чи всі цифри унікальні
        if (count(array_unique($digits)) == 4) {
            $count++;
        }
    }

    return $count;
}

$countUniqueDigits = countNumbersWithUniqueDigits();
echo "Кількість 4-цифрових чисел, де всі цифри різні: $countUniqueDigits";

function countNumbersWithSameDigits() {
    $count = 0;

    for ($digit = 0; $digit <= 9; $digit++) {
        $number = $digit * 1111; // Формуємо число з однакових цифр

        // Перевіряємо, чи є число 4-цифровим
        if ($number >= 1000 && $number <= 9999) {
            $count++;
        }
    }

    return $count;
}

$countSameDigits = countNumbersWithSameDigits();
echo "Кількість 4-цифрових чисел, де всі цифри однакові: $countSameDigits";

?>


</body>
</html>