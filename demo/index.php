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
// anonumas or lambda fn
//    $filterByAuthor = function ($books,$author):Array{
// more generic filter fn
$filter = function ($items,$fn){
        $filterItems =[];
        foreach($items as $item){
            if($fn($item)){
                $filterItems[] = $item;
                /* need to learn 

                // different between 
                // $filterBooks = $book;
                *$filterBooks[] = $book;
                */
            }
            
        }
        return $filterItems;
    };

    $filteredBooks = $filter( $books,function($item){
        return $item['author'] === 'allah';

    });
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
            // foreach(filterByAuthor($books,$author) as $book):
            foreach($filteredBooks as $book):?>
            <!-- extracted variable -->
            <li> <?=$book['url'] ?></li>

            <?php endforeach ?>
        
       </ul>
    
    
</body>
</html>