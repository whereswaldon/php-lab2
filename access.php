<?php
$db = mysql_connect('localhost', 'waldonck', '900494932');
if (!$db) {
	die('could not connect: '. mysql_error());
}
mysql_select_db('waldonck', $db);