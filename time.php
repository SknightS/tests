<?php
$start = strtotime("12:00");
$end = strtotime("12:19");// Run query to get datetime value from db
$elapsed = $end - $start;
echo date("H:i", $elapsed);
?>