<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php 
        $name = 'Al Quran';
        $read = true;

        if($read){
            $message = "I have read this book today $name";
        }else{
            $message = "i dont have read this book $name";
        }
        ?>
    <h1>
        <?php 

echo $message
        ?>
       
    </h1>
</body>
</html>