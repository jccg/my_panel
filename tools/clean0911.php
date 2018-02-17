<?php
require_once '../lib/config.php';

/**
 * 注意:  正式环境上请重命名tools文件夹,否则外部访问可能被恶意重置流量.
 */

//流量清空
// 启用请将false改成true
$enable =  true;
require_once 'clean_all.php';