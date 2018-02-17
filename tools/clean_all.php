<?php
/*
 * 清空流量
 */

if ($enable) {
	$db->update("user",[
		"transfer_enable" => "0",
	],
    ["expire_time[<]" => time()]);
}