<?php
/** op-layout-flexbox:/index.php
 *
 * @created     2023-05-11
 * @version     1.0
 * @package     op-layout-flexbox
 * @author      Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright   Tomoaki Nagahara All right reserved.
 */

/** Declare strict
 *
 */
declare(strict_types=1);

/** namespace
 *
 */
namespace OP;

//	...
if( OP()->Unit()->isInstalled('WebPack') === false ){
	throw new \Exception("WebPack unit has not been installed.");
}

//	...
RootPath('flexbox', __DIR__.'/template/');

//	Load default config.
$config = OP()->Template('config.php');
OP()->Config('flexbox', $config);

//	...
include('html.phtml');
