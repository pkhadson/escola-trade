<?php

if ( ! function_exists('wallet_check'))
{
	function wallet_check($user){
		return $user[1]===md5(base64_encode(base64_encode($user[0])));
	}
}
