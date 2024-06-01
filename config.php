<?php
/** op-layout-flexbox:/config.php
 *
 * @created     2023-02-06
 * @version     1.0
 * @package     op-layout-flexbox
 * @author      Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright   Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 */
namespace OP\LAYOUT\FLEXBOX;

/*
//	...
if( OP()->Env()->isAdmin() ){
	//	In case of set debug flag.
	$debug = OP()->Request('debug')['flexbox'] ?? null;
	if( $debug !== null ){
		//	Save to session.
		\OP\Session::Set('debug', $debug);
	}
	//	For admin.
	$debug = \OP\Session::Get('debug');
}else{
	//	Not admin user.
	$debug = false;
}
*/

//	...
return [
	'darkmode' => true,
	'debug'    => false,
];
