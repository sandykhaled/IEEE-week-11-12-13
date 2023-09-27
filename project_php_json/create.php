<?php
include 'partials/header.php';
require __DIR__ . '/users/users.php';
$user=[
    'id'=>'',
    'name'=>'',
    'username'=>'',
    'email'=>'',
    'phone'=>'',
    'website'=>'',
    'extension'=>''
];
$errors=[
    'name'=>'',
    'username'=>'',
    'email'=>'',
    'phone'=>'',
    'website'=>''
];
$is_valid=true;
if($_SERVER['REQUEST_METHOD'] === "POST") {
   $user=array_merge($user,$_POST);
  $is_valid=validateUser($user,$errors);
if($is_valid){
    $user=createUser($_POST);
    if(isset($_FILES['picture'])){
        uploadImage($_FILES['picture'],$user);
        header('Location:index.php');

    }
}
}

?>

         <?php include "form.php";?>

<?php include 'partials/footer.php'?>
