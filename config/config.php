<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    'secret_key'  => env('SUCIPHER_SECRET_KEY','yoursecretkey'),
    'cipher'      => env('SUCIPHER_CIPHER','aes-128-cbc'),
    'iv'          => env('SUCIPHER_IV','your-initialization-vector'),
];