<?php
session_start();

session_destroy();
header("Location: /SQL/index.php");
?>