<?php
$ddate = "2013-01-13";
$duedt = explode("-", $ddate);
$date  = mktime(0, 0, 0, $duedt[1], $duedt[2], $duedt[0]);
$week  = (int)date('W', $date);
echo "Weeknummer: " . $week;
?>

<?php
echo "\n\n";
// Monday
echo date(
    datetime::ISO8601,
    strtotime("2006W37"));
echo "\n\n";
// Sunday
echo date(
    datetime::ISO8601,
    strtotime("2006W377"));
?>