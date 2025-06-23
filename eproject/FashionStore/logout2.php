<?php
include_once "session.php";
unset($_SESSION['user_id']);
header('location:index.php');

?>