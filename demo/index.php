<?php
include_once 'functions.php';
include_once 'Database.php';
include_once 'Response.php';
include_once 'router.php';



$id = $_GET['id'];

$query = "select * from users2 where id < :id"; 

$posts = $db->query($query,['id'=>$id])->fetchAll(); // both works fine
// dd($posts);
// dd($_GET);



// dd($posts);
foreach ($posts as $post) :?>



<ul>
    <li><?=$post['name']?></li>
</ul>

<?php endforeach?>
