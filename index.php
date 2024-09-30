<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maxima-course</title>
</head>

<body>
    <?php
    include('vars.php');
    include('functions.php');
    $tasksTree = makeTree($tasks);
    echo drawTree($tasksTree);
    ?>
</body>

</html>