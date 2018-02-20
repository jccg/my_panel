<?php
//引入配置文件
require_once './lib/config.php';
require_once '_check.php';

$plan  = $_POST['plan'];
$uid  = $_COOKIE['uid'];

//$oo->get_expire_time()

if( $plan == $oo->get_plan()  ){
    echo ' <script>alert("所选套餐和原套餐相同！")</script> ';
    echo " <script>window.location='plan.php';</script> " ;
    exit();
}

$old_plan = $oo->get_user_info_array()['plan'];
$exp_time = $oo->get_user_info_array()['expire_time'];
$plan_ch_time = $oo->get_user_info_array()['plan_ch_time'];

$com_time = 0;
if($old_plan == "C")
{
    $com_time = ($exp_time - time())*2/2;
}
if($old_plan == "D")
{
    $com_time = ($exp_time - time())*4/2;
}
if($old_plan == "E")
{
    $com_time = ($exp_time - time())*6/2;
}
if($old_plan == "F")
{
    $com_time = ($exp_time - time())*8/2;
}
if($old_plan == "G")
{
    $com_time = ($exp_time - time())*10/2;
}




if ($plan == "C")
{
    if($plan < $old_plan)
    {
        if($plan_ch_time + 100 > time())
        {
            echo ' <script>alert("降级套餐需间隔30天！'. $fix_exp_time .'")</script> ';
            echo " <script>window.location='plan.php';</script> " ;
            exit();
        }
    }
    $fix_exp_time = $com_time*2/2 + time();
    $oo->update_ss_plan_ots($plan, 40);
    $oo->updata_time($fix_exp_time);

    //最低套餐
    $oo->update_ss_plan_ch();
    echo ' <script>alert("CCCCCC！'. $fix_exp_time .'")</script> ';
    echo " <script>window.location='plan.php';</script> " ;
    exit();
}
elseif ($plan == "E")
{
    if($plan < $old_plan)
    {
        if($plan_ch_time + 100 > time())
        {
            echo ' <script>alert("降级套餐需间隔30天！'. $fix_exp_time .'")</script> ';
            echo " <script>window.location='plan.php';</script> " ;
            exit();
        }
    }
    $fix_exp_time = $com_time*2/6 + time();
    $oo->update_ss_plan_ots($plan, 100);
    $oo->updata_time($fix_exp_time);
    $oo->update_ss_plan_ch();

    echo ' <script>alert("EEEEEE！ '. $fix_exp_time .'")</script> ';
    echo " <script>window.location='plan.php';</script> " ;
    exit();
}
elseif ($plan == "F")
{
    if($plan < $old_plan)
    {
        if($plan_ch_time + 100 > time())
        {
            echo ' <script>alert("降级套餐需间隔30天！'. $fix_exp_time .'")</script> ';
            echo " <script>window.location='plan.php';</script> " ;
            exit();
        }
    }
    $fix_exp_time = $com_time*2/8 + time();
    $oo->update_ss_plan_ots($plan, 140);
    $oo->updata_time($fix_exp_time);
    $oo->update_ss_plan_ch();


    echo ' <script>alert("FFFFF！'. $fix_exp_time .'")</script> ';
    echo " <script>window.location='plan.php';</script> " ;
    exit();
}
elseif ($plan == "G")
{
    if($plan < $old_plan)
    {
        if($plan_ch_time + 100 > time())
        {
            echo ' <script>alert("降级套餐需间隔30天！'. $fix_exp_time .'")</script> ';
            echo " <script>window.location='plan.php';</script> " ;
            exit();
        }
    }
    $fix_exp_time = $com_time*2/10 + time();
    $oo->update_ss_plan_ots($plan, 180);
    $oo->updata_time($fix_exp_time);
    $oo->update_ss_plan_ch();

    echo ' <script>alert("GGGGG！'. $fix_exp_time .'" )</script> ';
    echo " <script>window.location='plan.php';</script> " ;
    exit();
}
else
{
    echo ' <script>alert("error ！")</script> ';
    echo " <script>window.location='plan.php';</script> " ;
    exit();
}
