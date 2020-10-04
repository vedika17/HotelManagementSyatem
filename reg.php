<?
include("connection.php");
$uname=$_POST["txtuname"];
$upassw=$_POST["txtupassw"];

if (isset($_POST['login']))
{
	if (empty($_POST['txtuname']) || empty($_POST['txtupassw']))
	{
		echo 'invalid username or password';
	}
	else
	{
		$sql=mysqli_query($conn,"select first_name, cpassword from customer where first_name='$uname' and cpassword='$upassw'");
		$row=mysqli_fetch_array($sql);

		if(is_array($sql))
		{
			echo 'login successful';
		}
		else
		{
			echo 'login unsuccessful';
		}
	}
}
?>