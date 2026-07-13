<?php
include_once 'functions.php';
// include_once 'router.php';

include_once 'Database.php';
$config = include_once 'config.php';

$db= new Database($config['database']);

// $posts = $db->query('select * from posts')->fetchAll(PDO::FETCH_ASSOC);
$posts = $db->query('select * from posts')->fetchAll();
// dd($posts);



// dd($posts);
foreach ($posts as $post) :?>



<ul>
    <li><?=$post['title']?></li>
</ul>

<?php endforeach?>
