<?php
session_start();
session_destroy();
header('Location:Library.php');
exit();
