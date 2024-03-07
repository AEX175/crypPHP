<?php
class CrypX{
    public static function encrypt($data, $key,$iv) {
        return base64_encode(openssl_encrypt($data, 'aes-256-cbc', $key, 1, $iv));
    }

    public static function decrypt($data, $key,$iv) {
        $pase =  openssl_decrypt(base64_decode($data), 'aes-256-cbc', $key, 1, $iv);
        if (intval($pase)) {
            return intval($pase);
        }else{
            return $pase;
        }

    }


    public static function randKey($count) {
        return bin2hex(openssl_random_pseudo_bytes($count));
    }

    public static function randIv() {
        return base64_encode(openssl_random_pseudo_bytes(10));
    }
}

