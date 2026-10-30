<?php
if (!defined('MCDATAPATH')) exit;

if (defined('MCCONFKEY')) {
	require_once dirname( __FILE__ ) . '/../protect.php';

	BVProtect_V681::init(BVProtect_V681::MODE_PREPEND);
}