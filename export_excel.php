<?php
$con = new mysqli('localhost', 'root', '', 'collectmail');
$con->set_charset('utf8');
$sql = "SELECT * FROM mail_data";
$stmt = $con->prepare($sql);
// $stmt->bind_param('s', $mail);
// $mail = 'sdfa@qq.com';
$stmt->execute();
$result = $stmt->get_result();
$arr = $result->fetch_all(MYSQLI_ASSOC);//$result->fetch_array(MYSQLI_ASSOC) 单行
$stmt->close();
$con->close();
$f = fopen('data.xls','w');
foreach ($arr as $v) {
	fwrite($f,$v['id']."\t".$v['mail']."\t".date('y-m-d H:m:s',$v['create_time'])."\t\n");
}
fclose($f);