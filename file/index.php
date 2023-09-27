<?php
//echo disk_total_space('C:')/1024/1024/1024;
//echo "<br>";
//echo disk_free_space('C:')/1024/1024/1024;
//var_dump(file_exists('text.txt'));
//if(!is_dir('folders')){
//    mkdir('folders');
//}
//if(!file_exists('test')){
//    mkdir('test');
//}
//var_dump(is_dir('text.txt'));
//var_dump(is_dir('folders'));

//rmdir('folders');
//echo filesize('text.txt');
//mkdir('test',0777,true);
//rmdir('test');
//echo fileperms('test');
//chmod('test',0777);
//clearstatcache();
//echo fileperms('test');
//echo basename('index.php')."<br>";
//echo basename(__FILE__,'.php')."<br>";
//echo dirname(__FILE__,2);
//echo realpath(__FILE__);
//echo "<pre>";
//var_dump(pathinfo(__FILE__));
//echo "</pre>";
//echo pathinfo(__FILE__)['extension'];
//echo pathinfo(__FILE__,PATHINFO_BASENAME);
//$handle=fopen('text.txt','a');
//$handle=fopen('text.txt','x+');
//echo fgets($handle,3);
//fwrite($handle,"\n new line",6);
//fwrite($handle,"\n elzero web school");
//echo fread($handle,10);
//fclose($handle);
// w vs a w pointer at the beginning a pointer at the end
//echo "<pre>";
//print_r(file('text.txt'));
//echo "</pre>";
//echo count(file('text.txt'));
//$handle=fopen('text.txt','r');
//$count=1;
//while (!feof($handle)){
//    echo "Line $count".fgets($handle);
//    $count++;
//    echo "<br>";
//}
//for ($i=0;$i<count(file('text.txt'));$i++){
//    echo fgets($handle);
//}
//echo ftell($handle);
//fseek($handle,9,SEEK_CUR);
//echo fgets($handle);
//rewind($handle);
//echo ftell($handle);
//fclose($handle);
//echo "<pre>";
//print_r(glob('*'));
//echo "</pre>";
//rename('Old/testing.txt','New2/testing.txt');
//copy('New2/testing.txt','Old/test.txt');
echo get_include_path()."<br>";
echo file_get_contents('Old/testing.txt',true,Null,4,10);
file_put_contents('Old/testing.txt','Hello world!');
?>