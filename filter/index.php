<?php
echo "<pre>";
print_r(filter_list());
echo "</pre>";
echo filter_id('boolean')."<br>";
$bool="1";
var_dump(filter_var($bool,FILTER_VALIDATE_BOOL,FILTER_NULL_ON_FAILURE));
echo "<br>";
$url="https://google.com";
var_dump(filter_var($url,FILTER_SANITIZE_URL,['flags'=>
    [FILTER_FLAG_PATH_REQUIRED
        | FILTER_FLAG_QUERY_REQUIRED]]));
$ip="127.168.01.01";
var_dump(filter_var($ip,FILTER_VALIDATE_IP,FILTER_FLAG_IPV4));
$email="ajmed@ahmed.com";
var_dump(filter_var($email,FILTER_VALIDATE_EMAIL));
$int="99";
var_dump(filter_var($int,FILTER_VALIDATE_INT,["flags"=>FILTER_NULL_ON_FAILURE,'options'=>['min_range'=>50,'max_range'=>100]]));
$email=")(@%^&*";
var_dump(filter_var($email,FILTER_SANITIZE_EMAIL));
echo filter_input(INPUT_POST,"username",FILTER_VALIDATE_INT);
?>
<form action="" method="POST">
    <input type="text" name="username">
    <button type="submit">Submit</button>
</form>
