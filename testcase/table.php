<?php
/** op-layout-flexbox:/testcase/table.php
 *
 * @created     2024-04-26
 * @version     1.0
 * @package     op-layout-flexbox
 * @author      Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright   Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 */
namespace OP;

?>
<table>
	<tr><th>TEST    </th><td>test</td></tr>
	<tr><th>Text    </th><td><input type="text" name="text" value="text"/>            </td></tr>
	<tr><th>Radio   </th><td><input type="radio" name="text" value="text"/>Radio      </td></tr>
	<tr><th>Checkbox</th><td><input type="checkbox" name="text" value="text"/>Checkbox</td></tr>
	<tr><th>Textarea</th><td><textarea>textarea</textarea>                            </td></tr>
	<tr><th>Button  </th><td><button>Button</button>                                  </td></tr>
</table>
<style>
table, tr, th, td {
	border: 1px solid black;
	vertical-align: top;
}
td {
	border: 1px solid blue;
	_padding: auto;
}
input {
	_margin: auto;
}
td,
textarea {
	margin:  0;
	padding: 0;
}
</style>
