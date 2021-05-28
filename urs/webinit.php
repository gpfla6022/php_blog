<?php
session_start();

require_once __DIR__ . "/util.php";

$dbConn = mysqli_connect("127.0.0.1", "joy", "123456", "pr_blog") or die ("DB CONNECTION ERROR");
?>