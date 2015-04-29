<?php

session_start();

session_unset($_SESSION[user]);
session_destroy();
echo "<meta http-equiv=refresh content=0;../index.php>";
?>