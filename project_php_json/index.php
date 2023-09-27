<?php
require __DIR__.'/users/users.php';
$users=getUsers();
?>
<?php include 'partials/header.php'?>
<div class="container">
    <p>
      <a href="create.php" class="btn btn-outline-success">Create New User:</a>
    </p>
<table class="table table-striped">
    <tr>
        <td>Image</td>
        <td>Name</td>
        <td>Username</td>
        <td>Email</td>
        <td>Phone</td>
        <td>Website</td>
        <td>Actions</td>
    </tr>
    <?php
    foreach ($users as $user):
        ?>
    <tr>
        <td>
            <?php if(isset($user['extension'])) :?>
            <img src="<?="users/images/${user['id']}.${user['extension']}"?>" height="100" width="100">
            <?php endif;?>
        </td>
        <td><?= $user['name']?></td>
        <td><?= $user['username']?></td>
        <td><?= $user['email']?></td>
        <td><?= $user['phone']?></td>
        <td>
            <a target="_blank" href="http://<?= $user['website']?>"><?= $user['website']?></a>
        </td>
        <td>
            <a href="view.php?id=<?= $user['id']?>" class="btn btn-sm btn-outline-info">View</a>
            <a href="update.php?id=<?= $user['id']?>" class="btn btn-sm btn-outline-secondary">Update</a>
            <form action="delete.php" method="POST" style="display: inline-block">
                <input type="hidden" name="id" value="<?= $user['id']?>">
                <button class="btn btn-sm btn-outline-danger">Delete</button>
            </form>
        </td>
    </tr>
    <?php
    endforeach;
    ?>
</table>
</div>
<?php include "partials/footer.php";?>