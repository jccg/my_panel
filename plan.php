<?php
require_once '_main_t.php';
$node = new Ss\Node\Node();
$code = new Ss\Etc\ChgCode();
$codeInfo = new Ss\Etc\ChgCodeInfo();
?>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                套餐
                <small>plan</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <div class="box box-solid">
                        <div class="box-header">
                            <h3 class="box-title">套餐说明</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <p style="color:red;font-size:150%"> 注意：升级套餐的时候流量和线路立即生效，但是降级套餐每隔30天可以降级一次</p>
                            <p style="color:red;font-size:150%"> 系统是秒级计费，更换套餐后，有效期立即按对应的比例调整</p>

                            <p> 由于某些原因，最近的线路不是很稳定。所以买了一条香港hkt的100M带宽动态ip线路，价格很贵。所以只能优先给高端用户使用，后续盈亏平衡之后，会看情况安排线路。大家交的合租费用都在用来改进服务，购买更好的带宽，我不想用这个赚钱。如果持续亏损也许会撤掉这个线路。</p>
                            <p> 新线路会在3月初完成部署，也许会提前一些。大家的付费有不满意的话，也可以随时申请退款，不会让大家吃亏。</p>

                            <p> A为测试套餐，限1g流量，7天有效期</p>
                            <p> C为2元40g套餐</p>
                            <p> E为6元100g套餐</p>
                            <p> F为8元140g套餐，可使用hkt香港大带宽线路(按正常流量计费)</p>
                            <p> G为10元180g套餐，可使用hkt香港大带宽线路(按0.2倍流量计费)</p>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col (right) -->



                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">充值</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="post" action="plan_sub.php">
                            <div class="box-body">
                                <p style="color:red;font-size:150%">您当前的套餐是
                                <?php echo $oo->get_plan();

                                ?> </br>上次调整套餐的时间为<?php echo date('Y-m-d H:i:s',$oo->get_user_info_array()['plan_ch_time']);?>

                                </p></br>请选择需要更换的套餐：
                                <div class="form-group">
                                    <select name="plan">
                                        <option value="C">C为2元40g套餐</option>
                                        <option value="E">E为6元100g套餐</option>
                                        <option value="F">F为8元140g套餐，可使用hkt香港大带宽线路(按正常流量计费)</option>
                                        <option value="G">G为10元180g套餐，可使用hkt香港大带宽线路(按0.2倍流量计费)</option>
                                    </select>
                                    <input type="hidden" name="uid" value=<?php echo $uid;  ?>>
                                </div>


                            </div><!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" name="action" value="add" class="btn btn-primary">提交</button>
                            </div>

                        </form>
                    </div>
                </div><!-- /.box -->
            </div>   <!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
<?php
require_once '_footer.php'; ?>
