<?php
/**
 * Require the class file
 */
require 'class.EncryptDecryptData.php';

/**
 * Create a class object
 */
$Secure = new EncryptDecryptData;

/**
 * Encrypt the data
 */
$dataToEncrypt = 'Some sensitive data';
$encryptedData = $Secure->encryptData( $dataToEncrypt );
# Now, you can use "$encryptedData" variable anywhere.

/**
 * Decrypt the above encrypted data
 */
$decryptedData = $Secure->decryptData( $encryptedData );
# Now, you can use "$decryptedData" variable where it is required.
?>
