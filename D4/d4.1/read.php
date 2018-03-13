<?php
require_once('./includes/DbP.inc.php');
require_once('./includes/DbH.inc.php');
$dbh = DbH::getDbH();

$q = $dbh->prepare("select * from city");
$q->execute();
while($row = $q->fetch(PDO::FETCH_ASSOC))
{
    foreach($row as &$value)
    {
        $value = mb_convert_encoding($value, "UTF-8", "Windows-1252");
    }
    unset($value); # safety: remove reference
    $result[] = array_map('utf8_encode', $row );
}
$json = json_encode($result);




$array = array($json);
$serialized = serialize($array);
file_put_contents('cities.txt', $serialized);
$fileContents = file_get_contents('cities.txt');
// readfile('serialized.txt');
header("Location:cities.txt");
