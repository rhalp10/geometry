
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Line Exam</title>

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

<br>
<div style="color: black; margin-left: 20%; ">	
			<?php
			include("db.php");
			
				
			$query=mysql_query("SELECT * FROM examqa WHERE topicID = 3");
            $query1=mysql_query("SELECT * FROM examqa WHERE topicID = 3");
            $rows = mysql_num_rows($query);
            $rows1 = mysql_num_rows($query1);
			$num=0;
			while($test = mysql_fetch_array($query))	
			{
                
				$equestion=$test['equestion'] ;
				$eoption1= $test['eoption1'] ;					
				$eoption2=$test['eoption2'] ;
				$eoption3=$test['eoption3'] ;
				$eoption4=$test['eoption4'] ;
                

			?>

			<h4 for="equestion" ><?php echo $num=$num+1;?> .) <?php echo $equestion ?></h1>
			<br>
			<div class="col-xs-12">
               <div class="form-group ">
                <br>
                <select class="form-control" >
                <option name="eoption1"
                value="<?php  echo $eoption1; ?>"> <?php echo $eoption1 ?></option>
                <option name="eoption2"
                value="<?php echo $eoption2; ?>"> <?php echo $eoption2 ?></option>
                <option name="eoption3"
                value="<?php echo $eoption3; ?>"> <?php echo $eoption3 ?></option>
                <option name="eoption4"
                value="<?php echo $eoption4; ?>"> <?php echo $eoption4 ?></option>
                </select>
              </div>
              <hr>
            </div>  
			<?php	
			}
     
			mysql_close($conn);
			?>
			<br>
			<button type="submit" class=" btn  btn-primary btn-md" name="submit" onclick="window.confirm('Are you sure')"><a href="profile.php" style="color: white">FINISH</a></button><br>
   
			
</div>
