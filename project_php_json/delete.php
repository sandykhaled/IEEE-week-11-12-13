<?php
require __DIR__ . '/users/users.php';
if(!isset($_POST['id'])){
    include 'partials/notfound.php';
    exit;
}
$userId=$_POST['id'];
deleteUser($userId);
header('location:index.php');
?>