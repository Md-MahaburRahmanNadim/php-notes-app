<?php
include_once 'partials/head.php';
include_once 'partials/nav.php';
include_once 'partials/banner.php';
?>
  
   
   <div>
    <p>this is note taking page</p>
   </div>
   <ul>
    
        <?php
        foreach($notes as $note):?>
        <li>
        <a href="/note?id=<?= $note['id']?>"> <?= $note['body']?> </a>
        </li>
        <?php endforeach
        ?>
   </ul>
   <p>
     <li>
          <a href="">Create Note</a>
     </li>
   </p>
    <?php
    include_once 'partials/footer.php'
    ?>