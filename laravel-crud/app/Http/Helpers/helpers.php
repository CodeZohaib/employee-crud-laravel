<?php

use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

if (!function_exists('secure_encrypt')) {
    function secure_encrypt($value)
    {
        return Crypt::encryptString($value);
    }
}

if (!function_exists('secure_decrypt')) {
    function secure_decrypt($value)
    {
        try {
            return Crypt::decryptString($value);
        } catch (DecryptException $e) {
            return null;
        }
    }
}
