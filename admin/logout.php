<?php
session_unset();
session_destroy();
header("location:encrypted_login.php");
?>