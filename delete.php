<?php

require_once 'db.php';

$query = "DELETE FROM data WHERE id = '".$_GET['id']."'";
$db->query($query);
header('location: index.php');