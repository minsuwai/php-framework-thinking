<?php require 'partials/header.php'; ?>

<h1>Tasks</h1>

<?php foreach ($tasks as $task) : ?>
    <?php
    if ($task->complete) {
        echo "<strike>$task->description</strike><br>";
    } else {
        echo $task->description . "<br>";
    }
    ?>
<?php endforeach; ?>

<a href="/contactus">Contact</a>
<?php require 'partials/footer.php'; ?>