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
include 'partials/header.php';
if($_SERVER['REQUEST_METHOD'] === "POST"){
   $user= array_merge($user,$_POST);
    $is_valid=validateUser($user,$errors);
    if($is_valid){
        $user= updateUser($_POST,$userId);
        uploadImage($_FILES['picture'],$user);
        header('Location:index.php');
    }
}
?>

          <?php include 'form.php' ?>

<?php include 'partials/footer.php'?>
