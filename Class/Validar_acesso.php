<?php
session_start();

if(!isset($_SESSION['autenticar']) || $_SESSION['autenticar'] != 'SIM'){
    header("Location: /SQL/index.php?login=erro");
}

?>