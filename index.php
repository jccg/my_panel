<?php
require_once '_main.php';

//获得流量信息
if($oo->get_transfer()<1000000)
{
    $transfers=0;}else{ $transfers = $oo->get_transfer();

}
//计算流量并保留2位小数
$all_transfer = $oo->get_transfer_enable()/$togb;
$unused_transfer =  $oo->unused_transfer()/$togb;
$used_100 = $oo->get_transfer()/$oo->get_transfer_enable();
$used_100 = round($used_100,2);
$used_100 = $used_100*100;
//计算流量并保留2位小数
$transfers = $transfers/$tomb;
$transfers = round($transfers,2);
$all_transfer = round($all_transfer,2);
$unused_transfer = round($unused_transfer,2);
//最后在线时间
$unix_time = $oo->get_last_unix_time();
//到期时间
$u_expire_time = $oo->get_expire_time();
if($u_expire_time < time())
{
    $is_expire = true;
}
else{
    $is_expire = false;
}

?>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                用户中心
                <small>User Center</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- START PROGRESS BARS -->
            <div class="row">
                <div class="col-md-6">
                    <div class="box box-solid">
                        <div class="box-header">
                            <h3 class="box-title">公告&FAQ</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
							<p style="color:red;font-size:150%"> 预计3月初会上一个目前最佳的香港线路，100M带宽，质量很好，价格很贵。近期也会增加自助切换套餐的功能。希望大家帮忙在朋友间推广一下，用的人多才能有更稳定更优质的线路。谢谢大家~</p>
						    <p> 账号闲置一段时间不续费的账号，被被系统清理掉。由于精力有限，不提供安装和使用的技术支持，遇到网络问题可以随时联系我。</p>

                            <p>使用线路1（动态线路）会自动选择最优节点，不需要手动修改，如果速度慢可以告诉我。</p> 
                            <p>所有用户的流量每月1号清零</p> 
                                                        <p>交费方法：在下面的地址购买充值码，然后在自助交费里面输入充值码即可。每个充值码会延长对应的使用时间。充值后流量限额会修改为套餐对应的流量，每月清零 。</p>
                                   <p>             充值码购买地址（2元 12元 24元）&nbsp    http://pay.whybuy.cc/ </p>
								   <p>				备用购买地址（只支持购买12元的）&nbsp	http://t.cn/Rf8MzJZ</p>
                                    <p> 如果觉得目前的流量不够用，有大流量需求的话可以联系我，可以修改为每月6块钱100g，或者其他方案</p>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                    
                    
                    
                    
                </div><!-- /.col (right) -->

                <div class="col-md-6">
                    <div class="box box-solid">
                        <div class="box-header">
                            <h3 class="box-title">流量使用情况</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body" <?php if($u_expire_time < time()) {echo 'style="display: none;"';}?>>
                            <p> 已用流量：<?php echo $transfers."MB";?> </p>
                            <div class="progress progress-striped">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $used_100; ?>%">
                                    <span class="sr-only">Transfer</span>
                                </div>
                            </div>
                            <p> 可用流量：<?php echo $all_transfer ."GB";?> </p>
                            <p> 剩余流量：<?php echo  $unused_transfer."GB";?> </p>
                            <p> 到期时间：<code><?php echo date('Y-m-d H:i:s',$u_expire_time);?></code></p>
                        </div><!-- /.box-body -->
                        
                        <div class="box-body" <?php if(!$is_expire){echo 'style="display: none;"';}?>>
                            <p style="color:red;font-size:150%"> 您的服务已到期，如需继续使用请尽快充值</p>
                            <p> 到期时间：<code><?php echo date('Y-m-d H:i:s',$u_expire_time);?></code></p>
                        </div><!-- /.box-body -->
                        
                    </div><!-- /.box -->
                </div><!-- /.col (left) -->

                <div class="col-md-6">
                    <div class="box box-solid">
                        <div class="box-header">
                            <h3 class="box-title">连接信息</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <p> 端口：<code><?php echo $oo->get_port();?></code> </p>
                            <p> 密码：<?php echo $oo->get_pass();?> </p>
                            <?php 
                            $plandesc = "特殊定制";
                            if($oo->get_plan() == 'A')
                            {
                                $plandesc = "免费测试";
                            }
                            elseif($oo->get_plan() == 'C')
                            {
                                $plandesc = "2元每月40g";
                            }
                            elseif($oo->get_plan() == 'E')
                            {
                                $plandesc = "6元每月100g";
                            }
							elseif($oo->get_plan() == 'F')
                            {
                                $plandesc = "8元每月140g";
                            }
							
							?>
                            <p> 套餐：<span class="label label-info"> <?php echo $oo->get_plan()."套餐: ".$plandesc;?> </span> </p>
                            <p> 最后使用时间：<code><?php echo date('Y-m-d H:i:s',$unix_time);  ?></code> </p>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col (right) -->
            </div><!-- /.row -->
            <!-- END PROGRESS BARS -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
<?php
require_once '_footer.php'; ?>

<script type="text/javascript">
            // 过滤HTML标签以及&nbsp 来自：http://www.cnblogs.com/liszt/archive/2011/08/16/2140007.html
            function removeHTMLTag(str) {
                    str = str.replace(/<\/?[^>]*>/g,''); //去除HTML tag
                    str = str.replace(/[ | ]*\n/g,'\n'); //去除行尾空白
                    str = str.replace(/\n[\s| | ]*\r/g,'\n'); //去除多余空行
                    str = str.replace(/&nbsp;/ig,'');//去掉&nbsp;
                    return str;
            }
</script>

