<?php
//引入配置文件
require_once './lib/config.php';
$num  = $_POST['code_num'];
$uid  = $_POST['uid'];

if( $num == null || strlen($num) >33 || strlen($num) <10  ){
    echo ' <script>alert("充值码错误!")</script> ';
    echo " <script>window.location='charg.php';</script> " ;
    exit();
}

$c = new \Ss\User\Ss($uid);
$dd = new \Ss\Etc\ChgCodeInfo($num);

$vartt = $dd->GetTime();
$varst = $dd->GetStatus();


if(($vartt > 0)&& ($varst == 0)){
        $c->add_time($vartt);
        $dd->UpdateStatus($uid);
}else{
    echo ' <script>alert("充值码错误!")</script> ';
    echo " <script>window.location='charg.php';</script> " ;
    exit();
}



echo ' <script>alert("'.  $vartt     .'添加成功!")</script> ';
echo " <script>window.location='charg.php';</script> " ;