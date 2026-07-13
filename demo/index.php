<?php
include_once 'functions.php';
// include_once 'router.php';

include_once 'Database.php';

$db= new Database();

// $posts = $db->query('select * from posts')->fetchAll(PDO::FETCH_ASSOC);
$post = $db->query('select * from posts')->fetch(PDO::FETCH_ASSOC);
// dd($posts);



// dd($posts);
foreach ($posts as $post) :?>



<ul>
    <li><?=$post['title']?></li>
</ul>

<?php endforeach?>
