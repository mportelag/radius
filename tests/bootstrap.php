<?php

require_once __DIR__ . '/../autoload.php';

if (!function_exists('hex2bin')) {
    function hex2bin($str) {
        return pack("H*" , $str);
    }
}
