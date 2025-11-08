<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php 
        $greating = 'Assalamoikum';
        // echo $greating . ' '.'everyone';
        echo '$greating everyone'. PHP_EOL ; // this ('')single quet dont pars the variable
        echo '<br>';
        echo "$greating Everyone";
        ?>
    </h1>
</body>
</html>