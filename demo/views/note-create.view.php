<?php
include_once 'partials/head.php';
include_once 'partials/nav.php';
include_once 'partials/banner.php';

?>
<h2 class="bg-red-500">sdfsdf </h2>
<form method="post" class="bg-green-500">
    <label for="body">My Note</label>
    <!-- if we not specify the action the it will save on the same page. if we spacify a path action="/sdf" then the data will submit to that page

    * if we use method="post" then the data will send to the server. not see in the browser sidebar parms
      -->
    <p class="bg-green-300">
        <!-- we want the user data present here we the browser get refresh -->
        <textarea class="bg-green-300" name="body" id="body"><?= $_POST['body'] ?? '' ?></textarea>
    <p class="bg-red-500 mt-4 text-sm"><?= $errors['body'] ?></p>
    <!-- we saw that client can sent nothing. this is not fine 
        here we do a client side validation
        
        but we can bypass it via crul or commandline tools. thats why we need server side validation
        -->
    </p>

    <button type="submit">Create</button>
</form>

<?php
include_once 'partials/footer.php'
?>