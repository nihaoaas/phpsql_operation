<?php
$dsn = 'mysql:dbname=collectmail;host=localhost';
$user = 'root';
$pass = '';
$pdo = new PDO($dsn, $user, $pass);
$sql = "SELECT * FROM mail_data WHERE mail=?";
$sth = $pdo->prepare($sql);
// $sth->bind_param(1, $mail);
// $sth->execute();
$sth->execute([$mail]);
$result = $sth->fetchAll(PDO::FETCH_ASSOC);
var_dump($result);