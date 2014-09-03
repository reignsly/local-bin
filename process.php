<?php
	
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	require_once('config.php');
	require_once('helper.php');

	/* SAVE IN CREATE.PHP */
	if(isset($_POST['save_bin'])){
		$bin = htmlentities(trim($_POST['bin']),ENT_QUOTES); 
		$bin_path = 'bin/'.trim(str_replace(' ', '_', $_POST['bin_name'])).'_'.date('Y.m.d_g.h.s').'.bin';
		
		$fp = fopen($bin_path,"wb") or die("Unable to open file!");
		fwrite($fp,$bin);
		fclose($fp);

		$sly->system_message = '<i class="fa fa-check"></i>&nbsp; '.$_POST['bin_name'].' was successfully created';
	}

	/* SAVE IN EDIT.PHP */
	if(isset($_POST['edit_bin'])){
		$bin_content = htmlentities(trim($_POST['bin']),ENT_QUOTES); 
		$bin_path = 'bin/'.trim($_POST['bin_file']).'.bin';

		$rs = file_put_contents($bin_path, $bin_content);

		$sly->system_message = '<i class="fa fa-check"></i>&nbsp; Bin was successfully updated';
	}

	if($_GET){

		if($_GET['action'] === "edit_bin" && $_GET['bin'] ){
			$bin = trim($_GET['bin']);
			$bin_name = str_replace('_', ' ', $bin);

			$bin_file = $sly->base_path."\\".$bin.'.bin';
			$content = file_get_contents($bin_file);
		}

		if($_GET['action'] === "delete_bin" && $_GET['bin'] ){
			$bin = trim($_GET['bin']);
			$bin_name = str_replace('_', ' ', $bin);

			$bin_file = $sly->base_path."\\".$bin.'.bin';
			if(file_exists ( $bin_file )){
				unlink($bin_file);
				$sly->system_message = '<i class="fa fa-check"></i>&nbsp; Bin was successfully deleted';
			}
		}
	}

?>