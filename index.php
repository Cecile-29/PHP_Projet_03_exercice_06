<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Projet03 Exercice06</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid col-11 p-3 m-4 border border-warning rounded justify-content-center">
        <div class="row ">
            <h1 class="col-12 text-secondary text-center">PHP Projet03 Exercice06</h1>
            <h2 class="col-12 text-info text-center">Créez une fonction qui retourne l'addition de trois nombres.</h2>
        </div>
        <div class="row border border-primary rounded p-3 m-4 text-secondary justify-content-center">
            <?php
               function multi($num1, $num2, $num3){
                return 'la multiplication des trois nombres suivants : '. $num1. ' X '. $num2. ' X '. $num3. ' est égale à : '. ($num1 * $num2 * $num3);
                }
                echo multi(5, 5, 5);
            ?>
        </div>
        <div class="row border border-primary rounded p-3 m-4 text-secondary justify-content-center">
            <?php
               function addNumber($number1 = 2, $number2 = 3, $number3 = 4){
                $result = $number1 + $number2 + $number3;
                return 'l\'addition de '. $number1. ' + '. $number2. ' + '. $number3. ' est égale à : '. $result; 
                }
                echo addNumber();
            ?>
        </div>
    </div>
</body>
</html>