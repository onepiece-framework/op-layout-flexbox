<?php
/** op-layout-flexbox:/css/action.php
 *
 * @created     2023-05-09
 * @version     1.0
 * @package     op-layout-flexbox
 * @author      Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright   Tomoaki Nagahara All right reserved.
 */
//	...
$return = [];

//	...
foreach( glob(__DIR__.'/*.css') as $file ){
	$return[] = substr($file, 0, -4); // color.css --> color
}

//	...
return $return;
