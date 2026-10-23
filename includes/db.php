<?php
$db = new mysqli("localhost:3307","root","","aynou-shop");
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>