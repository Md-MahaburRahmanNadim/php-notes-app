<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    /**
     * we will start with next day at 1hr 5 mint inshallah to 2 hr 5 mint
     */
    
    $books = [
     [
        'author'=> 'allah',
        'name'=>'al quran',
        'publishYear' => 1450,
        'url'=> 'Hazrat Mohamad (S. A.)'
     ]
     , [
        'author'=> 'Nobi Mohamad (S.A.)',
        'name'=>'Sunnah',
        'publishYear' => 1450,
        'url'=> 'Hazrat Mohamad (S. A.)'
     ], [
        'author'=> 'allah',
        'name'=>'al quran',
        'publishYear' => 1450,
        'url'=> 'Hazrat Mohamad (S. A.)'
     ], [
        'author'=> 'allah',
        'name'=>'al quran',
        'publishYear' => 1450,
        'url'=> 'Hazrat Mohamad (S. A.)'
     ]
    ];

    function filterByName($books,$author):Array{
        $filterBooks =[];
        foreach($books as $book){
            if($book['author'] ===$author){
                $filterBooks[] = $book;
                /* need to learn 

                // different between 
                // $filterBooks = $book;
                *$filterBooks[] = $book;
                */
            }
            
        }
        return $filterBooks;
    }
    $author = 'allah';
    ?>
      <ul>
    
        <?php foreach($books as $book):?>
           
                <li>
                    <?= $book['name']?>
            
            </li>

            
    
        <?php endforeach ?>

       </ul>
       <h3>only book for <?= $author?></h3>
       <ul>
        <?php
            foreach(filterByName($books,$author) as $book):?>
            <li> <?=$book['url'] ?></li>

            <?php endforeach ?>
        
       </ul>
    
    
</body>
</html>