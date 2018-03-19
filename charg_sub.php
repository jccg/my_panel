<?php
//引入配置文件
require_once './lib/config.php';
require_once '_check.php';

$num  = $_POST['code_num'];
$uid  = $_POST['uid'];

if( $num == null || strlen($num) >33 || strlen($num) <10  ){
    echo ' <script>alert("CODE ERROR，充值码错误!")</script> ';
    echo " <script>window.location='charg.php';</script> " ;
    exit();
}

$c = new \Ss\User\Ss($uid);
$dd = new \Ss\Etc\ChgCodeInfo($num);

$vartt = $dd->GetTime();
$varst = $dd->GetStatus();


if(($vartt > 0)&& ($varst == 0)){
    if(($c->get_plan() == 'A') || ($c->get_plan() == 'C'))
    {
        //测试用户或2元用户
        $c->add_time($vartt);
        $dd->UpdateStatus($uid);
        $c->update_ss_plan();
    }
    elseif($c->get_plan() == 'D')
    {
        //4元80g用户,12元3个月
        $c->add_time(ceil($vartt/2));
        $dd->UpdateStatus($uid);
		$c->update_ss_plan_ots('D', 80);
    }
    elseif($c->get_plan() == 'E')
    {
        //6元100g用户,12元2个月
        $c->add_time(ceil($vartt/3));
        $dd->UpdateStatus($uid);
		$c->update_ss_plan_ots('E', 100);
    }
    elseif($c->get_plan() == 'F')
    {
        //8元140g用户,12元1.5个月
        $c->add_time(ceil($vartt/4));
        $dd->UpdateStatus($uid);
		$c->update_ss_plan_ots('F', 140);
    }
    elseif($c->get_plan() == 'G')
    {
        //10元180g用户,12元1.2个月
        $c->add_time(ceil($vartt/5));
        $dd->UpdateStatus($uid);
		$c->update_ss_plan_ots('G', 180);
    }
}else{
    echo ' <script>alert("CODE ERROR，充值码错误!")</script> ';
    echo " <script>window.location='charg.php';</script> " ;
    exit();
}



echo ' <script>alert("OK,充值成功!")</script> ';
echo " <script>window.location='charg.php';</script> " ;
