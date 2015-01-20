<?php

/**
 * @package         PHP-Lib
 * @description     Class is used to Encrypt and Decrypt the data using MCRYPT module.
 * @copyright       Copyright (c) 2013, Peeyush Budhia
 * @author          Peeyush Budhia <peeyush.budhia@phpnmysql.com>
 * @link            http://phpnmysql.com
 * @license         GNU GPL v2.0
 */
 
class EncryptDecryptData {

	/**
	 * @author       Peeyush Budhia <peeyush.budhia@phpnmysql.com>
	 * @description  The function is use to encrypt the string
	 *
	 * @param $_unsecureData
	 *        The parameter is used to pass value for encryption
	 *
	 * @return bool|string
	 *         Return encrypted data
	 */
	function encryptData( $_unsecureData ) {
		if ( ! $_unsecureData ) {
			return false;
		}
		$_encryptData = mcrypt_encrypt( MCRYPT_RIJNDAEL_256, 'SECURE_STRING_1', $_unsecureData, MCRYPT_MODE_ECB, 'SECURE_STRING_2' );

		return trim( base64_encode( $_encryptData ) );
	}

	/**
	 * @author       Peeyush Budhia <peeyush.budhia@phpnmysql.com>
	 * @description  The function is used to decrypt the string which was encrypted by encryptData function
	 *
	 * @param $_secureData
	 *               The parameter is used to pass the encrypted value for decryption
	 *
	 * @return bool|string
	 *          Return decrypted data
	 */
	function decryptData( $_secureData ) {
		if ( ! $_secureData ) {
			return false;
		}
		$_encryptData = base64_decode( $_secureData );
		$_decryptData = mcrypt_decrypt( MCRYPT_RIJNDAEL_256, 'SECURE_STRING_1', $_encryptData, MCRYPT_MODE_ECB, 'SECURE_STRING_2' );

		return trim( $_decryptData );
	}
}
