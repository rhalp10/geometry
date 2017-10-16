<?php
if (isset($_POST['submit']))
	{	   
	include 'db.php';
	
			 		$username=$_POST['username'] ;
					$password= $_POST['password'] ;	
					$repassword = $_POST['repassword'];				
					$email=$_POST['email'];
					$name=$_POST['name'];
					$gender=$_POST['gender'];
					$query=mysql_query("SELECT * FROM acc WHERE username='$username'");
					$rows = mysql_num_rows($query);

	if ($password == $repassword) 
		{
	

			if ($rows == 1) 
			{
?>
			<br>
			<div class="alert alert-warning">
			  <strong>Already!</strong> exist	
			</div>
<?php
			}									
			else
			{
			mysql_query("INSERT INTO `acc`(username,password,email,name,gender) 
		 	VALUES ('$username','$password','$email','$name','$gender')");
		 	$acc = mysql_query("SELECT accID FROM `acc` WHERE username='$username'");
		 	while ($test1 = mysql_fetch_array($acc)) {
                $accID=$test1['accID'];
                
            }
		 	$topic_result=mysql_query("SELECT * FROM topic WHERE topicID");
		 	while ($test2 = mysql_fetch_array($topic_result)) 
		 	{
		 	$topicID = $test2['topicID'];
		 	mysql_query("INSERT INTO `examrecord`(accID,topicID,eScore,eStatus) 
		 	VALUES ('$accID','$topicID','0','notcomplete')");
			}

			$subtopic_result=mysql_query("SELECT * FROM subtopic WHERE subtopicID");
		 	while ($test3 = mysql_fetch_array($subtopic_result)) 
		 	{
		 	$subtopicID = $test3['subtopicID'];
		 	mysql_query("INSERT INTO `quizrecord`(accID,subtopicID,qScore,qStatus) 
		 	VALUES ('$accID','$subtopicID','0','notcomplete')");
			}	
		 	?>
			<div class="alert alert-success">
			  <strong>Success!</strong> successfuly create
			</div>
<?php

			}
		 
											
		
		}
		else
		{
			?>
			<div class="alert alert-warning">
			  <strong>Password not match</strong>
			</div>
			<?php
		}		
	}
?>