<?php

	function vd($tmp=''){
		echo "<pre>";
		var_dump($tmp);
		die();
	}

	function vp($tmp=''){
		echo "<pre>";
		var_dump($tmp);
		echo "</pre>";
	}

	function get_bins()
	{
		global $sly;
		$dir    = $sly->base_path;
		$files1 = scandir($dir);

		$bins = false;

		foreach ($files1 as $k => $f) {
			$ext = pathinfo($f, PATHINFO_EXTENSION);
			if($ext !== "bin"){ continue; }

			$bin_file = $sly->base_path."\\".$f; 
			$string = file_get_contents($bin_file);

			$t = str_replace('.bin','', $f);
			
			$bins[]	= array(
					'bin' => $t,
					'content' => $string,
					'title' => str_replace('_', ' ', $t)
				);
		}

		return $bins;
	}

	function bins_dd($xbin = false)
	{
		$bins = get_bins();

		$dd = "<select name='dd_bin' id='dd_bin' class='form-control' onchange='change_dd(this)' />";

		if($bins){
			foreach ($bins as $k => $bin) {
				$bin = (object)$bin;
				$selected =  ($xbin && $xbin === $bin->bin) ? 'selected' : '';
				// vp($bin);
				$dd .= "<option $selected value='$bin->bin'>".ucwords(str_replace('_', ' ', $bin->bin))."</option>";
			}
		}

		$dd .= "</select>";

		return $dd;
	}


?>