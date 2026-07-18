<?php
include_once 'views/partials/head.php';
include_once 'views/partials/nav.php';
include_once 'views/partials/banner.php';

?>


<div>
    <p>this is single note taking page</p>
</div>
<a href="/notes">Go Back</a>

<ul>
    <p>

        <?= htmlspecialchars($note['body'])
        ?>
    </p>
</ul>
<?php
include_once '/views/partials/footer.php'
?>