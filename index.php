<?php

$todojsonArray = [];
if (file_exists("jobs.json")) {
    $todojson = file_get_contents("jobs.json");
    $todojsonArray = json_decode($todojson, true);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do App</title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <div>
        <form action="todo.php" method="post" class="enter-job-form">
            <input type="text" name="todoname" placeholder="Enter your Job...">
            <button type="submit">+</button>
        </form>
        <div class="todo-jobs">
            <?php foreach ($todojsonArray as $todoName => $what) : ?>
                <div class="todo-name">
                    <div>
                        <form action="complete.php" method="get">
                            <input type="checkbox" name="check_job" <?php echo $what['completed'] ? "checked" : "" ?> value=" <?php echo $todoName ?> ">
                        </form>
                        <h3>
                            <?php echo $todoName; ?>
                        </h3>
                    </div>
                    <div class="btns">
                        <form action="delete.php" method="post">
                            <input type="hidden" name="todo_name" value="<?php echo $todoName ?>">
                            <button class="delete-btn">Delete</button>
                        </form>
                        <button class="edit-btn">Edit</button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <script src="js/index.js"></script>
</body>

</html>