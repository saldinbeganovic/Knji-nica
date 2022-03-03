<?php
include_once "session.php";

include 'database.php';


session_destroy();
header("Location: ../");
?>
