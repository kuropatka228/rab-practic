<?php
$user="root";
$password="pass";
$host="amvera-daq-x-electrobus-run-zab-eco";
$db="zab-eco";
$dbh='mysql:host='.$host.';dbname='.$db.';charset=utf8';
$pdo=new PDO($dbh,$user,$password);
