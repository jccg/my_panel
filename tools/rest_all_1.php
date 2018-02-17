<?php
/*
 * 清空流量
 */

if ($enable) {
	$db->update("user",[
		"u" => "0",
		"d" => "0"
	],
    ["plan" => ["C","D","E","F","G"]]);
}