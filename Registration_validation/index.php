<?php
define('REQUIRED_FIELD_MESSAGE','This is field is required');
$errors= [];
$username='';
$email='';
$password='';
$password_confirm='';
$cv_url='';
if($_SERVER['REQUEST_METHOD']=="POST"){
    $username=post_data('username');
    $email=post_data('email');
    $password=post_data('password');
    $password_confirm=post_data('password_confirm');
    $cv_url=post_data('cv_url');
    echo "<pre>";
    var_dump($username,$email,$password,$password_confirm,$cv_url);
    echo "</pre>";
    if(!$username){
        $errors['username']=REQUIRED_FIELD_MESSAGE;
    }else if(strlen($username)<6 || strlen($username)>16 ){
        $errors['username']="Username must be greater than 6 and less than 16";
    }
    if(!$email){
        $errors['email']=REQUIRED_FIELD_MESSAGE;
    }else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors['email']="This is field must be a valid Email Address";
    }
    if(!$password){
        $errors['password']=REQUIRED_FIELD_MESSAGE;
    }
    if(!$password_confirm){
        $errors['password_confirm']=REQUIRED_FIELD_MESSAGE;
    }
    if($password && $password_confirm && strcmp($password,$password_confirm) !== 0){
        $errors['password_confirm']= "This must match password field";

    }
    if($cv_url && !filter_var($cv_url,FILTER_VALIDATE_URL)){
        $errors['cv_url']="Please provide A valid Url";
    }
    if(empty($errors)){
     echo "Every thing is good";
    }
}
function post_data($data){
    return !$_POST[$data]?'':htmlspecialchars(stripslashes($_POST[$data]));
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <title>Registration</title>
</head>
<body>
<div class="container">
<form method="POST" action="" novalidate autocomplete="off">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control <?= isset($errors['username']) ? 'is-invalid' : ''; ?>" value="<?= $username?>">
                <small class="form-text text-muted">Min: 6 and max 16 characters</small>
                <div class="invalid-feedback"><?= $errors['username'] ?? ''; ?></div>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label>Email</label>
                <input name="email" class="form-control <?= isset($errors['email']) ? 'is-invalid' : ''; ?>" value="<?= $email?>" type="email">
                <div class="invalid-feedback"><?= $errors['email'] ?? ''; ?></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Password</label>
                <input name="password" class="form-control <?= isset($errors['password']) ? 'is-invalid' : ''; ?>" type="password" value="<?=$password?>">
                <div class="invalid-feedback"><?= $errors['password'] ?? ''; ?></div>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label>Repeat Password</label>
                <input class="form-control <?= isset($errors['password_confirm']) ? 'is-invalid' : ''; ?>" type="password" value="<?= $password_confirm?>" name="password_confirm">
                <div class="invalid-feedback"><?= $errors['password_confirm'] ?? ''; ?></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <label>your CV link</label>
        <input type="url" placeholder="https://www.example.com/my-cv" class="form-control <?= isset($errors['cv_url']) ? 'is-invalid' : ''; ?>" name="cv_url" value="<?= $cv_url?>">
         <div class="invalid-feedback"><?= $errors['cv_url'] ?? ''; ?></div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <input type="submit" class="btn btn-group-sm btn-success mt-3" value="Regitser">
        </div>
    </div>

</form>
</div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>