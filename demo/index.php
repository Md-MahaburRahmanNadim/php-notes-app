<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php 
    $books =[
        'Al Quran',
         "Al Hadis",
         "Life story of Profet Mohamad (SA.)"
    ]
        ?>
    <h1>
        <?php 
        foreach($books as $book):?>
        <li> <?= $book?> </li>


        <?php endforeach
        ?>
       
    </h1>
</body>
</html>