<?php
session_start();
session_unset();
session_destroy();

//kembali/redirect ke halaman login.php
header('location:../index.php');
?>