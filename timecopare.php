<?php 
date_default_timezone_set("Asia/Dhaka");
$now_time=date("H:i");
echo $now_time."<br>";
//$current_time = "4:59 ";
//$sunrise = "5:42 ";
//$sunset = "6:26 ";
$endtime="15:12";
echo $endtime."<br>";
$date1 = DateTime::createFromFormat('H:i', $now_time);
$date2 = DateTime::createFromFormat('H:i', $endtime);
//$date3 = DateTime::createFromFormat('H:i', $sunset);
if ($date1 > $date2)
{
   echo 'here';
}
?>