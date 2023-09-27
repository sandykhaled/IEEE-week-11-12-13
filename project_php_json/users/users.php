<?php
function getUsers(){
    return json_decode(file_get_contents(__DIR__ . '/users.json'),true);
}
function getUserById($id){
$users=getUsers();
foreach ($users as $user){
    if($user['id']==$id){
        return $user;
    }
}
header('location:index.php');
}
function createUser($data){
    $users=getUsers();
    $data['id']=rand(10000,20000);
    $users[]=$data;
    putJson($users);

}
function updateUser($data,$id){
    $updatedUser=[];
    $users=getUsers();
    foreach ($users as $i=>$user){
        if($user['id']==$id){
         $users[$i]=$updatedUser=array_merge($user,$data);
        }
}
    putJson($users);
    return $updatedUser;
}
function deleteUser($id){
    $users=getUsers();
    foreach ( $users as $i=>$user) {
        if($user['id']==$id){
           array_splice($users,$i,1);
        }
    }
   putJson($users);
}
function uploadImage($file,$user){
    if(isset($_FILES['picture']) && $_FILES['picture']['name']) {

        if (!is_dir(__DIR__ . "/images")) {
            mkdir(__DIR__ . "/images");
        }
        $fileName = $file['name'];
        $dotPosition = strpos($fileName, '.');
        $extension = substr($fileName, $dotPosition + 1);
        move_uploaded_file($file['tmp_name'], __DIR__ . "/images/${user['id']}.$extension");
        $user['extension'] = $extension;
        updateUser($user, $user['id']);
    }
}
function putJson($users){
    file_put_contents(__DIR__.'/users.json',json_encode($users,JSON_PRETTY_PRINT));
}
function validateUser($user,&$errors){
    $is_valid=true;
    if(!$user['name']){
        $is_valid=false;
        $errors['name']="Name is mandatory";
    }
    if(!$user['username'] || strlen($user['username'] )<6 ||strlen($user['username'] )>16){
        $is_valid=false;
        $errors['username']="Username is required and must be more than 6 and less than 16 chars ";
    }
    if(!filter_var($user['email'],FILTER_VALIDATE_EMAIL)){
        $is_valid=false;
        $errors['email']="This must be a valid Email Address";
    }
    if(!filter_var($user['phone'],FILTER_VALIDATE_INT)){
        $is_valid=false;
        $errors['phone']="This must be a valid Phone Number";
    }
    return $is_valid;
}