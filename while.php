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
<?php

    if (isset($_POST['sk'])){
        $sk=$_POST['sk'];

        $suma=0;
        while($sk!=0){
            $suma+=$sk % 10;
            $sk= floor($sk / 10) ;
        }
        echo "Skaiciu suma: $suma";
    }

?>
<form method="post">
    <input type="text" name="sk"> <br>
    <button>Skaičiuoti</button>
</form>
</body>
</html>
<?php






