<?php
include_once 'partials/head.php';
include_once 'partials/nav.php';
include_once 'partials/banner.php';
?>
  
   
   <div>
    <p>this is single note taking page</p>
   </div>
    <a href="/notes">Go Back</a>

   <ul>
       <p>
        
        <?= $note['body']
            ?>
       </p>     
   </ul>
    <?php
    include_once 'partials/footer.php'
    ?>