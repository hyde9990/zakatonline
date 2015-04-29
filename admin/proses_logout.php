<?php
session_start();
session_unset($_SESSION[namauser]);
session_destroy();
header("Location: index.php");
?>