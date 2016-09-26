<?php
//引入配置文件
require_once '../lib/config.php';
require_once '_check.php';
$num  = $_POST['code_num'];

$c = new Ss\Etc\ChgCode();
$data = $c->GetCode($num);
$result = "";
foreach ( $data as $rs ){ 
$result . $rs['code'] ."\n";
}


echo ' <script>prompt(alert("' .$result .'添加成功!"))</script> ';

//echo ' <script>prompt("查询结果:","'. $result .'")</script> ';
echo " <script>window.location='charg.php';</script> " ;