<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    so chia: <input type="text" name="numerator"> <br>
    so bi chia: <input type="text" name="denominator"> <br>
    <button type="submit">calculator</button>
</form>
</body>
</html>

<?php

class DivideByZeroException extends Exception
{
    public function __toString()
    {
        return "can't divide by zero";
    }
}

if ($_SERVER["REQUEST_METHOD"] === 'POST'){
    $numerator = $_POST["numerator"];
    $denominator = $_POST["denominator"];

    function divide($numerator, $denominator){
        if ($denominator === "0"){
            throw new DivideByZeroException();
//            throw new Exception('Division by zero.');
        }
        return $numerator / $denominator;
    }
    try {
        echo divide($numerator,$denominator);

    }catch (DivideByZeroException $e){
        echo $e->__toString();
    }
}
?>



