<?php
$todos =[];
if(file_exists('todo.json')){
    $json=file_get_contents('todo.json');
    $todos = json_decode($json,true);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <title>Todo List</title>

</head>
<body>
<form method="POST" action="newtodo.php">
        <input type="text" name="todo_name" placeholder="Enter your todo" class="form-control mt-3">
        <button class="btn btn-success mt-3 text-center mb-3">New Todo</button>
</form>
<?php foreach ($todos as $todoName=>$todo):?>
<div class="form-control">
    <form method="POST" action="change_status.php" class="d-inline-block">
    <input type="hidden" name="todo_name" value="<?= $todoName?>">
    <input type="checkbox" <?php echo $todo['completed'] ? 'checked' : ''?>>
    </form>
    <?= $todoName ?>
    <form method="POST" action="delete.php" class="d-inline-block">
        <input type="hidden" name="todo_name" value="<?= $todoName?>">
        <button class="btn btn-sm btn-danger mx-3">Delete</button>
    </form>
</div>
<?php endforeach; ?>
<script>
    const checkboxes = document.querySelectorAll('input[type=checkbox][name=todo_name]');
    checkboxes.forEach(ch => {
        ch.onclick = function () {
            this.parentNode.submit();
        };
    });
</script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>