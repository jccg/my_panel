<?php
require_once '_main.php';
$node = new Ss\Node\Node();
$code = new Ss\Etc\ChgCode();
$codeInfo = new Ss\Etc\ChgCodeInfo();
?>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                充值
                <small>charg</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">充值</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="post" action="charg_sub.php">
                            <div class="box-body">

                                <div class="form-group">
                                    <label for="cate_title">充值码</label>
                                    <input  class="form-control" name="code_num" placeholder="32位充值码"  >
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
