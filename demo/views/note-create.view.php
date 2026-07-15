<?php
include_once 'partials/head.php';
include_once 'partials/nav.php';
include_once 'partials/banner.php';
?>
  
   
  <form  >
    <label for="body">Note</label>
    <!-- name='db-table-colum-name'
     because when we submiting with get request we get the name=data as parameters. If we not include the method=psot
      -->
     <p>
<textarea name="body" id="body"></textarea>
     </p>
    
    <button type="submit">send</button>
  </form>
   
    <?php
    include_once 'partials/footer.php'
    ?>