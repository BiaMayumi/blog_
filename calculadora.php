<?php
$cookie_name1 = "num";
$cookie_value1 = "";
$cookie_name2 = "op";
$cookie_value2 = "";

if (isset($_POST["num"])) {
    if ($_POST["num"] == "C") {
        $num = "";
    } else {
        $num = $_POST["input"] . $_POST['num'];
    }
} else {
    $num = "";
}

if (isset($_POST['op'])) {
    $cookie_value1 = $_POST['input'];
    setcookie($cookie_name1, $cookie_value1, time() + (86400 * 30), "/");

    $cookie_value2 = $_POST['op'];
    setcookie($cookie_name2, $cookie_value2, time() + (86400 * 30), "/");
    $num = "";
}

if (isset($_POST['equa1'])) {
    $num = $_POST['input'];
    switch ($_COOKIE['op']) {
        case "+":
            $result = $_COOKIE['num'] + $num;
            break;
        case "-":
            $result = $_COOKIE['num'] - $num;
            break;
        case "*":
            $result = $_COOKIE['num'] * $num;
            break;
        case "/":
            $result = $_COOKIE['num'] / $num;
            break;
    }

    $num = $result;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="calculadora.css">
</head>
<body>
    <form class="fundo" action="" method="post">
        <div class="calculadora">
            <h1>Calculadora</h1>
            
            <input id="resultado" name="input" value="<?php echo @$num?>">
            <table>
                <tr>
                    <td><button class="botao" name="num" value="C">C</button></td>
                    <td><button class="botao" name="num" value="<"><</button></td>
                    <td><button class="botaoo" name="op" value="/">/</button></td>
                    <td><button class="botaoo" name="op" value="*">X</button></td>
                </tr>
                <tr>
                    <td><button class="botao" name="num" value="7">7</button></td>
                    <td><button class="botao" name="num" value="8">8</button></td>
                    <td><button class="botao" name="num" value="9">9</button></td>
                    <td><button class="botaoo" name="op" value="-">-</button></td>
                </tr>
                <tr>
                    <td><button class="botao" name="num" value="4">4</button></td>
                    <td><button class="botao" name="num" value="5">5</button></td>
                    <td><button class="botao" name="num" value="6">6</button></td>
                    <td><button class="botaoo" name="op" value="+">+</button></td>
                </tr>
                <tr>
                    <td><button class="botao" name="num" value="1">1</button></td>
                    <td><button class="botao" name="num" value="2">2</button></td>
                    <td><button class="botao" name="num" value="3">3</button></td>
                    <td rowspan="2"><button class="botaoo" style="height: 106px" name="equa1" value="=">=</button></td>
                </tr>
                <tr>
                    <td colspan="2"><button class="botao" style="width: 106px" name="num" value="0">0</button></td>
                    <td><button class="botaoo" name="op" value=".">.</button></td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>