<?php
include_once base_path('views/partials/head.php');
include_once base_path('views/partials/nav.php');
include_once base_path('views/partials/banner.php');
$p = __DIR__;
// its give us server to the current file folder path.
/**
 * base_path('views/...'
 * its )give us from project root(from demo) 
 */


?>


<div>
    <p>this is note taking page</p>
</div>
<ul>

    <?php
    foreach ($notes as $note): ?>
        <li>
            <a href="/note?id=<?= $note['id'] ?>"> <?= htmlspecialchars($note['body']) ?> </a>
        </li>
    <?php endforeach
    ?>
</ul>
<p>
    <li>
        <a href="/note/create">Create Note</a>
    </li>
</p>
<?php
include_once base_path('views/partials/footer.php');
?>