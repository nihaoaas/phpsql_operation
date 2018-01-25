<?php
$dsn = 'mysql:dbname=collectmail;host=localhost';
$user = 'root';
$pass = '';
$pdo = new PDO($dsn, $user, $pass);
$sql = "INSERT INTO mail_data (mail, create_time) VALUES (?, ?)";
$sth = $pdo->prepare($sql);
$mail = 'dfsf@qq.com';
$time = time();
// $sth->bind_param(1, $mail);
// $sth->bind_param(2, $time);
// $sth->execute();
$sth->execute([$mail, $time]);
$insert_id = $pdo->lastInsertId()