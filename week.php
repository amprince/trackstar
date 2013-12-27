<?php
$ddate = "2013-01-13";
$duedt = explode("-", $ddate);
$date  = mktime(0, 0, 0, $duedt[1], $duedt[2], $duedt[0]);
$week  = (int)date('W', $date);
echo "Weeknummer: " . $week;
?>