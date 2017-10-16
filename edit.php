<?php
require("db.php");
$username =$_POST['username'];

$result = mysql_query("SELECT * FROM acc WHERE username  = '$username'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$user=$test['username'] ;
				$pass= $test['password'] ;					
				$em=$test['email'] ;
				$name=$test['name'] ;
				$gender=$test['gender'] ;

if(isset($_POST['update']))
{	
	$username_save = $_POST['username'];
	$password_save = $_POST['password'];
	$email_save = $_POST['email'];
	$name_save = $_POST['name'];
	$gender_save = $_POST['gender'];

	mysql_query("UPDATE acc SET username ='$username_save', password ='$password_save',
		 email ='$email_save',name ='$name_save' ,gender ='$gender_save'WHERE accID = '$id'")
				or die(mysql_error()); 
	echo "Update Saved!";
	
	header("Location: profile.php");			
}
mysql_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Update</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="color: black;">






<form method="post">
<table>
	<tr>
		<td>Username:</td>
		<td><input type="text" name="username" value="<?php echo $user ?>"/></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="text" name="password" value="<?php echo $pass ?>"/></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" name="email" value="<?php echo $em ?>"/></td>
	</tr>
	<tr>
		<td>Name</td>
		<td><input type="text" name="name" value="<?php echo $name ?>"/></td>
	</tr>
	<tr>
		<td>Gender</td>
		<td><input type="text" name="gender" value="<?php echo $gender ?>"/></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="update" value="update" /></td>
	</tr>
</table>

</body>
</html>
