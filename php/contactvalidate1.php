<?php
include("db_contact.php");
if(isset($_POST["submit"]))
{
$uname=$_POST['username'];
$mail=$_POST['email'];
$br=$_POST['branch'];
$yr=$_POST['year'];
$qr=$_POST['query'];
$dt=date("d/m/y h:i:sa");
$arr=array(
	'Name'=>$uname,'Email'=>$mail,'Branch'=>$br,'Year'=>$yr,'Query'=>$qr
	);
	$msg=validate_form($arr);
	if($msg !='')
		{
			echo $msg."is empty";
		}
	else
	{
		$sql ="INSERT INTO contactdetails (Date1,Name,Email,Branch,Year,Query)
				values('$dt','$uname','$mail','$br','$yr','$qr')";
		$qry = mysql_query($sql);
		if(mysql_affected_rows()>0)
		{
			echo 'Record added';
		}
		else
		{
			echo 'Record Not added';
			echo $dt;	
		}		
	}
}
?>