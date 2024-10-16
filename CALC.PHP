<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Отправка формы</title>
</head>
<body style="background-color:#aab7ab">
<?php
if(!isset($_GET["num1"]))
{
?>
    <h2 style="text-align:center">Калькулятор</h2>
    <form action="calc.php" method="get">
    <table><tr>
    <td colspan=2>Первое число</td>
    <td colspan=2><input type="text" name="num1" value="0"></input></td>
    </tr><tr>
    <td colspan=2>Второе число</td>
    <td colspan=2><input type="text" name="num2" value="0"></input></td>
    </tr><tr>
    <td><input type="radio" name="operation" value="plus"> + </input></td>
    <td><input type="radio" name="operation" value="minus"> - </input></td>
    <td><input type="radio" name="operation" value="multiply"> * </input></td>
    <td><input type="radio" name="operation" value="divide"> / </input></td>
    </tr><tr>
    <td colspan=4 style="text-align:center"><input type="submit"></input></td></tr></table>
    </form>
    <?php
}
else {
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    if (!is_numeric($num1) || !is_numeric($num2)) {
        echo "<h2>Необходимо ввести два числа!</h2>";
        return;
    }
    if (!isset($_GET["operation"])) {
        echo "<h2>Что вообще Вы хотели сделать с числами?</h2>";
        return;
    }
    $operation = $_GET["operation"];
    switch ($operation) {
        case "plus":
            echo "<h2> Результат: ". $num1 + $num2. "</h2>";
            break;
        case "minus":
            echo "<h2> Результат: ". $num1 - $num2. "</h2>";
            break;
        case "multiply":
            echo "<h2> Результат: ". $num1 * $num2. "</h2>";
            break;
        case "divide":
            if ($num2 == 0) {
                echo "<h2>А Вы знали, что на ноль делить нельзя?</h2>";
                break;
            } else {
                echo "<h2> Результат: ". $num1 / $num2. "</h2>";
                break;
            }
    }
}
?>
</body>
</html>
