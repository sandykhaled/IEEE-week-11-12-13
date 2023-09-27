<?php
require __DIR__ . '/users/users.php';
if(!isset($_GET['id'])){
    include 'partials/notfound.php';
    exit;
}
$userId=$_GET['id'];
$user=getUserById($userId);
if(!$user){
    include 'partials/notfound.php';
    exit;
}
include 'partials/header.php'
?>
<div class="container">
<div class="card">
    <div class="card-header">
        <h3>View User : <b><?= $user['name']?></b></h3>
    </div>
    <div class="card-body">
        <a class="btn btn-success"href="update.php?id=<?= $user['id']?>">Update</a>
       <form style="display: inline-block" method="POST" action="delete.php">
           <input type="hidden" name="id" value="<?= $user['id']?>">
           <button class="btn btn-danger">Delete</button>
       </form>
</div>
    <div class="card-footer">
        <table class="table">
            <tbody>
            <tr>
                <th>Name:</th>
                <td><?=$user['name']?></td>
            </tr>
            <tr>
                <th>UserName:</th>
                <td><?=$user['username']?></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><?=$user['email']?></td>
            </tr>
            <tr>
                <th>Phone:</th>
                <td><?= $user['phone']?></td>
            </tr>
            <tr>
                <th>Website:</th>
                <td>
                    <a target="_blank" href="http://<?= $user['website']?>"><?= $user['website']?></a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
<?php include 'partials/footer.php'?>