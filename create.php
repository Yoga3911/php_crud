<?php

require_once "db.php";

$query = "INSERT INTO data VALUES (0, '".$_POST['nama']."', '".$_POST['umur']."')";
$result = $db->query($query);
header('location: index.php');