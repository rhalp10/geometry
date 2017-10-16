<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register Account</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/login.css" rel="stylesheet">

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
<body>
<div id="wrapper">
<h2>Register Account:</h2>
<hr>
<form  role="form"  method="post">
        <div class="row">
            <div class="col-xs-6">
                <label for="username">Username:</label>
                <input type="username" class="form-control ib" name="username" required>
            </div>
            <div class="col-xs-6">
                <label for="email">Email:</label>
                <input type="email" class="form-control ib" name="email" required>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control ib" name="password" required>
            </div>
            <div class="col-xs-6">
                <label for="rpwd">Confirm Password:</label>
                <input type="password" class="form-control ib" name="repassword" required>
            </div>
            
        </div>
         <div class="row">
            <div class="col-xs-6">
            <label for="name">Name:</label>
            <input type="text" class="form-control ib" name="name" required>
            </div>
            <div class="col-xs-6">
               <div class="form-group ">
                <label for="gender">Gender:</label>
                <br>
                <input type="radio" name="gender"
                <?php if (isset($gender) && $gender=="Female") echo "checked";?>
                value="female" required> Female
                <input type="radio" name="gender"
                <?php if (isset($gender) && $gender=="Male") echo "checked";?>
                value="male"required> Male
              </div>
            </div>  
        </div>
              <br>
              <p style="text-align: center;">
        <button type="submit" class="bt" name="submit">Sign-up</button><br><a href="loginacc.php">Already have account?</a> 
        </p>
        <hr>
        <?php
include 'create.php';
?>
        </form>

</div>


 <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>



</body>
</html>
