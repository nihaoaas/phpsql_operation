<?php
$con = new mysqli('localhost', 'root', '', 'collectmail');
$con->set_charset('utf8');
$sql = "INSERT INTO mail_data (mail, create_time) VALUES (?, ?)";
$stmt = $con->prepare($sql);
$stmt->bind_param('s', $mail, $time);
$time = time();
$mail = 'sdfa@qq.com';
$stmt->execute();
$insert_id = $stmt->insert_id;
echo $stmt->error;
$stmt->close();
$con->close();