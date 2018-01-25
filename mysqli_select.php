<?php
$con = new mysqli('localhost', 'root', '', 'collectmail');
$con->set_charset('utf8');
$sql = "SELECT * FROM mail_data WHERE mail=?";
$stmt = $con->prepare($sql);
$stmt->bind_param('s', $mail);
$mail = 'sdfa@qq.com';
$stmt->execute();
$result = $stmt->get_result();
$arr = $result->fetch_all(MYSQLI_ASSOC);//$result->fetch_array(MYSQLI_ASSOC) 单行
$stmt->close();