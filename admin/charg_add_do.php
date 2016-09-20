<?php
//引入配置文件
require_once '../lib/config.php';
require_once '_check.php';
$num  = $_POST['code_num'];
$money  = $_POST['code_money'];
$time = $_POST['code_time'];
$tag  = $_POST['code_tag'];
$c = new Ss\Etc\ChgCode();
$c->AddManyCode($num,$money,$time,$tag);
echo ' <script>alert("添加成功!")</script> ';
echo " <script>window.location='charg.php';</script> " ;