<?php

require_once 'db.php';
$query = "UPDATE data SET nama='".$_POST['nama']."', umur='".$_POST['umur']."' WHERE id='".$_POST['id']."'";
$db->query($query);
header('location: index.php');