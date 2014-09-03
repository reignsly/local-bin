<?php
	
	$sly = new stdClass;
	$sly->app_title = "Local Bin";
	$sly->system_message = "";
	$sly->bin_path = 'bin';
	$sly->base_path = $_SERVER['DOCUMENT_ROOT']."\\".$sly->bin_path;

	$path_dr = __DIR__;
	$path_ar = explode("\\", $path_dr);
	$sly->app_folder_name = $path_ar[count($path_ar)-1];
	
?>