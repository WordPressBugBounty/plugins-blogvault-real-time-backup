<?php
if (!defined('ABSPATH') && !defined('MCDATAPATH')) exit;

if (!class_exists('BVProtectLoggerFS_V591')) :
class BVProtectLoggerFS_V591 {
	public $logFile;

	function __construct($filename) {
		$this->logFile = $filename;
	}

	public function log($data) {
		$_data = serialize($data);
		$str = "bvlogbvlogbvlog" . ":";
		$str .= strlen($_data) . ":" . $_data;
		// phpcs:ignore WordPress.PHP.DevelopmentFunctions.error_log_error_log -- logging required
		error_log($str, 3, $this->logFile);
	}
}
endif;