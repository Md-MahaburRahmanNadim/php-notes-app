<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $book ='Al Quran';
    $read = true;
    if($read){
        $message = 'yes';
    }else{
        $message = 'no';
    }
    
    ?>
     
    <h1>
        <?php echo "Do you read the book of $book daily? $message" ?>
       
    </h1>
</body>
</html>