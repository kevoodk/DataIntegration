<?php
require_once('./includes/DbP.inc.php');
require_once('./includes/DbH.inc.php');

$dbh = DbH::getDbH();

$district = $_POST['district'];
$countrycode = $_POST['countrycode'];
$name = $_POST['name'];
$population = $_POST['population'];

$sql = "INSERT INTO city (district, countrycode, name, population) VALUES ('$district','$countrycode','$name', '$population')";

$res = $dbh->query($sql);
