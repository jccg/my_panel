<footer class="page-footer orange">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">关于</h5>
                <p class="grey-text text-lighten-4">本站只做私人用途，不对外开放.</p>


            </div>
            <div class="col l3 s12">
                <h5 class="white-text">用户</h5>
                <ul>
                    <li><a class="white-text" href="user">用户中心</a></li>
                    <li><a class="white-text" href="user/login.php">登录</a></li>
                    <li><a class="white-text" href="user/register.php">注册</a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">页面</h5>
                <ul>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            processed in <?php
            $Runtime->Stop();
            echo $Runtime->SpendTime()."ms";
            ?>
        </div>
    </div>
</footer>


<!--  Scripts-->
<script src="asset/js/jQuery.min.js"></script>
<script src="asset/materialize/js/materialize.min.js"></script>
<script src="asset/materialize/js/init.js"></script>

</body>
</html>
