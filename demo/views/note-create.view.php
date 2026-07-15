<?php
include_once 'partials/head.php';
include_once 'partials/nav.php';
include_once 'partials/banner.php';

/**
 * start from 4:24
 */
?>
  
  <form  method="post">
    <label for="body">My Note</label>
    <!-- if we not specify the action the it will save on the same page. if we spacify a path action="/sdf" then the data will submit to that page

    * if we use method="post" then the data will send to the server. not see in the browser sidebar parms
      -->
     <p>
<textarea name="body" id="body"></textarea>
     </p>
    
    <button type="submit">Create</button>
  </form>
   
    <?php
    include_once 'partials/footer.php'
    ?>