<?php
session_start();

session_unset();
session_destroy();

header("location: User_Interface.php");
exit;
?>