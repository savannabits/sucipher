<?php

namespace Savannabits\Sucipher;

class Sucipher
{
    public function encrypt(string $data): bool|string
    {
        $cipher = config('sucipher.cipher');
        $key = config('sucipher.secret_key');
        $iv = config('sucipher.iv');
        $paddedData = openssl_encrypt(
            $data,
            $cipher,
            $key,
            OPENSSL_RAW_DATA,
            $iv);
        if (!$paddedData) return false;
        return base64_encode($paddedData);
    }
    public function decrypt(string $encrypted_data): bool|string
    {
        $cipher = config('sucipher.cipher');
        $key = config('sucipher.secret_key');
        $iv = config('sucipher.iv');
        $paddedData = base64_decode($encrypted_data);
        return openssl_decrypt(
            $paddedData,
            $cipher,
            $key,
            OPENSSL_RAW_DATA,
            $iv
        );
    }
}
