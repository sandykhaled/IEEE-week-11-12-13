<?php
/*
 setcookie()
 Name
 Value
 Expire
 Path
 Domain
 Secure
 HTTP_only
  */
// setcookie('style[color]','light',time()+60 * 60 * 24 * 30,'/');
// // setcookie('popup','green',strtotime("+1 month"));
// setcookie('style[bg-color]','green',time()+1);

// echo "<pre>";
// print_r($_COOKIE);
// echo "</pre>";
// if($_COOKIE['style']){
//     echo $_COOKIE['style']['color']
// ;}
// if(isset($_COOKIE['background'])){
//     echo "<style>body { background-color:".$_COOKIE['background']."}</style>";
// }
// if($_SERVER['REQUEST_METHOD']== "POST"){
//    setcookie('background',$_POST['color'],strtotime('+1 months'));
//    header('location:'.$_SERVER['REQUEST_URI']);
//    exit();
// }
// //Session
session_start();
// $_SESSION['name']='Ahmed';
// $_SESSION['id']=1005;
// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";
// echo session_id();
// isset($_SESSION['view'])?$_SESSION['view']++:$_SESSION['view']=1;
// echo "Name :".$_SESSION['name']."View".$_SESSION['view'];
session_unset();
// session_destroy();
header('Refresh:5 ;url= index.php');
exit();
if($_SERVER['REQUEST_METHOD']=="POST"){
    if($_POST['user']=='Ali'){
        $_SESSION['username']='Ali';
        $_SESSION['id']=1005;
    }
}
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
if(isset($_SESSION['username'])){
    echo "Welcome".$_POST['user'];
}
else{

?>
<form action="" method="post">
    <input type="color" Name="color">
    <input type="submit" value="Choose color">
</form>
<form action ="" method="post">
    <input type="text" name="user">
    <input type="submit" value="submit">
</form> 
<?php }
?>
<a href="logout.php">Logout</a>