<?php
include_once base_path('views/partials/head.php');
include_once base_path('views/partials/nav.php');
include_once base_path('views/partials/banner.php');

?>


<div>
    <p>this is single note taking page</p>
</div>

<ul>
    <p>

        <?= htmlspecialchars($note['body'])
        ?>
    </p>
</ul>
<form method="POST">
    <input type="hidden" name="id" value="<?= $note['id'] ?>">
    <button type="submit" class="mt-xl text-red-400 text-sm">Delete</button>
</form>
<a href="/notes" class="mt-xl text-blue-400 hover:underline">Go Back</a>

<?php
include_once base_path('/views/partials/footer.php');
?>