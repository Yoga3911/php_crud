<?php

$db = new mysqli('localhost', 'root', '', 'crud');
if ($db->connect_error) {
    die('Gagal');
}