mysql_connect("localhost","root","") or die("Connection Error");
$db=mysql_select_db("db");

if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$pass=$_POST['password'];
	$phone=$_POST['phone'];
	
	$qry="insert into users values('$name','$pass','$phone')";
	mysql_query($qry) or die("Connection error");

	echo "Hello $name";
	echo "Database Inserted";
	
	mysql_close();
}
