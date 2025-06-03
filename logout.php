<?php
session_start();

session_regenerate_id();
unsset($_SESSION);

session_destroy();

header("location: login.php");
?>