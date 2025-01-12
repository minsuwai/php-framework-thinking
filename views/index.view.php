<?php require 'partials/header.php'; ?>

<h1>Enter your name</h1>

<form action="/names" method="POST">
    <input type="text" name="name">
    <button type="submit" value="submit">Submit</button>
</form>



<?php require 'partials/footer.php'; ?>