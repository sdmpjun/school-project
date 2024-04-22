<?php
session_start();//开启session
unset($_SESSION['users']); //清空session里面的值
header("Location:login.php");