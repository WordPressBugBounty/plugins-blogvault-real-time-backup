<?php
if (!defined('MCDATAPATH')) exit;

if (defined('MCCONFKEY')) {
	require_once dirname( __FILE__ ) . '/../protect.php';

	BVProtect_V662::init(BVProtect_V662::MODE_PREPEND);
}