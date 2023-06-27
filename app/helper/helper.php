<?php
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


if (!function_exists('noty')) {

    function noty($message = null, $type = null)
    {
        $noty = app('noty');
        if (!is_null($message)) {
            return $noty->message($message, $type);
        }
        return $noty;
    }
}


if (!function_exists('emptytablemessage')) {

    function emptytablemessage($number) {
        $html = '<tr>';
        $html .= '<td colspan="'.$number.'" align="center">No data found</td>';
        $html .= '</tr>';
        return $html;
    }
}

if (!function_exists('encrypt_decrypt')) {
		
	function encrypt_decrypt($action, $string) {
		$output = false;
		$encrypt_method = "AES-256-CBC";
		$secret_key = '@!allindiampa';
		$secret_iv = '@!allindiampa';
		$key = hash('sha256', $secret_key);
		$iv = substr(hash('sha256', $secret_iv), 0, 16);
		if ( $action == 'encrypt' ) {
			$output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
			$output = base64_encode($output);
		} else if( $action == 'decrypt' ) {
			$output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
		}
		return $output;
	}

}

?>