<?php
session_start();
unset($_SESSION['login']);
    header('Location:./main/index.php');