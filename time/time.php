<?php

echo date_default_timezone_get();
echo date('Y-m-d H:i:s')."<br>";
date_default_timezone_set('Africa/Cairo');
echo date_default_timezone_get();
echo date('Y-m-d H:i:s')."<br>";
//$d=date_create("",timezone_open("Indian/Antananarivo"));
//echo date_format($d,"Y-m-d H:i:s");
//var_dump(checkdate(2,7,2000));
//Date_format
$d=date_create();
echo date_format($d,"Y")."<br>";//2023
echo date_format($d,"y")."<br>";//23
echo date_format($d,"M")."<br>";//sep
echo date_format($d,"m")."<br>";//1-12
echo date_format($d,"F")."<br>";//September
echo date_format($d,"t")."<br>";//30
echo date_format($d,"d")."<br>";//24
echo date_format($d,"j")."<br>";//24
echo date_format($d,"D")."<br>";//sun
echo date_format($d,"l")."<br>";//sunday
echo date_format($d,"z")."<br>";//1-12
echo date_format($d,"d S")."<br>";//th
echo date_format($d,"H a")."<br>";//20 pm
echo date_format($d,"h A")."<br>";//08 PM
echo date_format($d,"g")."<br>";//8
echo date_format($d,"G")."<br>";//20
echo date_format($d,"i")."<br>";//th
echo date_format($d,"s")."<br>";//th
echo date_format($d,"u")."<br>";//th
//date_add($d,date_interval_create_from_date_string('2 months'));
//date_sub($d,date_interval_create_from_date_string('2 months'));
//date_modify($d,'+1 year 2 months');
//echo date_format($d,'Y-m-d H:i:s');
echo time()/60/60/24/365;//seconds from 1/1/1970
var_dump(getdate());
echo "<pre>";
var_dump(date_parse("190-2-31 45:30:10 UTC"));
echo "</pre>";
$date=date_create('1970-11-01');
$now=date_create("now");
$diff=date_diff($date,$now);
echo "<pre>";
print_r($diff);
echo "</pre>";
echo "Member for".$diff->days."days";
//
echo date("Y-m-d h:i:s",strtotime('next sunday'));
echo date("Y-m-d h:i:s l",strtotime('tomorrow',strtotime('1973-10-27')));

?>