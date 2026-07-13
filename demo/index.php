<?php
include_once 'functions.php';
// include_once 'router.php';

// code refactoring
// connect to a db and execute a query
class Database{
    // what if we can create pdo obj once and user rest of the instance creation
    public $connection;
    public function __construct(){
        $dns = 'mysql:host=localhost;port=3306;user=laravel_user;dbname=laravel_db;charset=utf8mb4;password=Secret123!;';
// $pdo = new PDO($dns);
$this->$connection = new PDO($dns);

    }
    public function query($query){

$statement = $this->$connection->prepare($query);
$statement->execute();
// $posts = $statement->fetchAll();
return $statement;
    }
    

}
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
