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

    $filteredBooks = array_filter( $books,function($book){
        return $book['author'] === 'allah';

    });
    include_once './index.view.php'
    ?>