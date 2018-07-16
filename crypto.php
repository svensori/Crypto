class Crypto{
		private static $method = 'AES-256-CBC'; 
		private static $skey = '?81!-`g}3||vsHm';//any
		private static $siv = 'OC9S?+M%y:pQ2sV';//any

		public static function encrypt($data){
	        return base64_encode(openssl_encrypt($data, self::$method, hash('sha256', self::$skey), 0, substr(hash('sha256', self::$siv), 0, 16)));
		}

		public static function decrypt($data){
			return openssl_decrypt(base64_decode($data), self::$method, hash('sha256', self::$skey), 0, substr(hash('sha256', self::$siv), 0, 16));
		}
	}
