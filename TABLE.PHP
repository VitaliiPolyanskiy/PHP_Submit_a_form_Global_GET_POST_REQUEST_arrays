<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Отправка формы</title>
</head>
<body style="background-color:#aab7ab">
<?php
if(!isset($_POST["number1"]))
{
?>
<h2 style="color:#333333;">Таблица умножения</h2>
<form method="post" action="table.php">
    <p>Введите число начала таблицы умножения</p>
    <input type="Text" name="number1"></input>
    <p>Введите число конца таблицы умножения</p>
    <input type="Text" name="number2"></input>
    <input type="Submit"></input>
</form>
<?php
}
else {
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];
    if ($number1 == 0 || $number1 == 1)
        $number1 = 2;
    if ($number2 == 0) {
        $number2 = 10;
    }
    if ($number1 >= $number2) {
        echo "<h2>Введите первое число меньше второго!</h2>";
        return;
    }
    echo "<table style=\"border:3px solid black\"><tr>";
    for ($z = 1; $z <= 10; $z++)
        echo "<th>" . $z . "</th>";
    echo "</tr>";
    for ($i = $number1; $i <= $number2; $i++) {
        echo "<tr>";
        for ($y = 1; $y <= 10; $y++) {
            echo "<td style='padding:5px; border: 1px solid black'>" . $i * $y . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>
</body>
</html>
