<?php
include_once 'functions.php';
// include_once 'router.php';

include_once 'Database.php';
$config = include_once 'config.php';

$db= new Database($config['database']);

$id = $_GET['id'];
// $query ="select * from users2 where id <{$id} ";
/**
 * never ever inline a query. because what ever you write on url it will executed on the db. thats why you can drop a hole db by using url and sql injection or command. its better 
 * its better use the params binding to the statement (:id or ?)
 * 
 */

// dd($query);
$posts = $db->query($query)->fetchAll();
// dd($_GET);



// dd($posts);
foreach ($posts as $post) :?>



<ul>
    <li><?=$post['name']?></li>
</ul>

<?php endforeach?>
