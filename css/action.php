<?php
/**
 * op-skeleton-3:/app/layout/white/css/action.php
 *
 * @creation  2017-09-06
 * @version   1.0
 * @package   op-skeleton
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
//	...
$extension = 'css';

//	...
$files = [];
$files[] = 'body';

//	...
Webpack::Run(__DIR__, $files, $extension);
