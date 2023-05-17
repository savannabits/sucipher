<?php

namespace Savannabits\Sucipher;

class Sucipher
{
    /**
     * Encrypt a plain message
     * @param string $data | Plain message that needs to be encrypted.
     * @return bool|string returns a base64-encoded encryption of the input message. Returns false if encryption fails
     */
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

    /**
     * Decrypt a base64-encoded encrypted message
     * @param string $encrypted_data Encrypted message (Must be base64-encoded)
     * @return bool|string Returns the decrypted message, or false in case the decryption fails.
     */
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
