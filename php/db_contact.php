<?php
$servername="localhost";
$db="contactus";
$password="hello";
$username="root";

$conn = mysql_connect($servername,$username,$password);

if(!$conn)
die("not connected");

mysql_select_db($db,$conn);

function validate_form($arr)
{
	$str='';
	foreach($arr as $key => $value)
	{
		if($value == '')
		{
			$str.=$key.'';

		}


	}
	return $str;
}

?>
