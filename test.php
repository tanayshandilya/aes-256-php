<?php

include_once 'aes-256.php';

/**
*create new aes instance
*@param aes $aes
*/

$aes = new aes;

/**
*Call encrypt function
*@return binary
*/

$encrypted = $aes->encrypt( 'Text To Encrypt', 'SomeSecretKey' );

echo $encrypted . "<br>";

/**
*Call decrypt function
*@return string
*/

$decrypted = $aes->decrypt( $encrypted, 'SomeSecretKey' );

echo $decrypted;