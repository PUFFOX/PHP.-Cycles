<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            width: 50px;
            height: 50px;
            text-align: center;
            vertical-align: middle;
            font-size: 20px;
            font-weight: bold;
        }
        .white {
            background-color: #f0d9b5;
        }
        .black {
            background-color: #b58863;
            color: white;
        }
        .figure {
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>
<table>
    <?php
    // Шахматна дошка 8x8
    for ($row = 1; $row <= 8; $row++) {
        echo "<tr>";
        for ($col = 1; $col <= 8; $col++) {
            $colorClass = ($row + $col) % 2 == 0 ? 'white' : 'black';
            echo "<td class='$colorClass'>";
            
            // Виводимо фігури, якщо потрібно
            if (($row == 1 || $row == 8) && ($col == 1 || $col == 8)) {
                // Верхній лівий та правий кут
                $file = 'img/rook.png';
            } elseif (($row == 1 || $row == 8) && ($col == 2 || $col == 7)) {
                // Верхній лівий та правий конь
                $file = 'img/knight.png';
            } elseif (($row == 1 || $row == 8) && ($col == 3 || $col == 6)) {
                // Верхній лівий та правий слон
                $file = 'img/bishop.png';
            } elseif (($row == 1 || $row == 8) && $col == 4) {
                // Верхня королева
                $file = 'img/queen.png';
            } elseif (($row == 1 || $row == 8) && $col == 5) {
                // Верхній король
                $file = 'img/king.png';
            } elseif (($row == 2 || $row == 7) && $col == 1) {
                // Ліва та права пішак
                $file = 'img/pawn.png';
            } elseif (($row == 2 || $row == 7) && $col == 8) {
                // Ліва та права пішак
                $file = 'img/pawn.png';
            } else {
                $file = '';
            }
            
            if (!empty($file)) {
                echo "<img class='figure' src='$file' alt='Figure'>";
            }
            
            echo "</td>";
        }
        echo "</tr>";
    }
    ?>
    </table>
</body>
</html>