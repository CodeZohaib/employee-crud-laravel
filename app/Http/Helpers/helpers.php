<?php

use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

if (!function_exists('encrypt')) {
    function encrypt($value)
    {
        return Crypt::encryptString($value);
    }
}

if (!function_exists('decrypt')) {
    function decrypt($value)
    {
        try {
            return Crypt::decryptString($value);
        } catch (DecryptException $e) {
            return null;
        }
    }
}
