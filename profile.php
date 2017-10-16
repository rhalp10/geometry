<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Profile Account</title>

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
<body style="color: black;">
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
<hr>


<div class="container">
<div >
<table class="table">

    <tr>
    <th>Quiz #</th>
    <th>Quiz Description</th>
    </tr>
            <?php
            include("db.php");
             
            $accID=mysql_query("SELECT accID FROM acc WHERE username ='$login_session'");
            $result=mysql_query("SELECT * FROM subtopic");

            while ($t = mysql_fetch_array($accID)) {
                $acc=$t['accID'];
                
            }
            $result1=mysql_query("SELECT * FROM quizrecord WHERE accID = '$acc'");
            
            
            


            while($test = mysql_fetch_array($result))   
            {   
                $subtopic=$test['subtopicID'];
                $subtopicDesc=$test['subtopicDesc'];
                ?>
                <tr align='center'>
                <td><font color='black'><?php echo $subtopic ?> </font></td>
                <td><font color='black'><?php echo $subtopicDesc?></font></td>
                </tr>
                <?php
            }
            ?>

</table>
</div>
<div style="width: 20%; margin-top: -37.5%; margin-left: 60%;">
<table class="table">

  <tr>
    <th>Quiz Score</th>
    <th>Status</th>
  </tr>           
            <?php
            $n=0;
            $n1=0;
             while($test1 = mysql_fetch_array($result1))
             {  
                $n=$n+1;
                $val = 'notcomplete';
                $qstatus =$test1['qstatus'];
                echo "<tr align='center'>"; 
                echo"<td><font color='black'>" .$test1['qscore']."</font></td>";
                if ( $qstatus == $val)  
                {
                echo"<td> <a href ='quiz$n.php' target='_blank'><center>Attempt</center></a>";  
                echo "</tr>";
                }
                else
                {
                
                echo"<td><span class='fa fa-check'></span>&nbspComplete";  
                echo "</tr>";   
                }
            }

           
            ?>

</table>
</div>
</div>

<div class="container">
<div >
<table class="table">
    <tr>
    <th>Exam #</th>
    <th>Exam Description</th>  
    </tr>
            <?php
            include("db.php");
            $result2=mysql_query("SELECT * FROM topic");
            $result3=mysql_query("SELECT * FROM examrecord WHERE accID = '$acc'");
            
            while($test2 = mysql_fetch_array($result2))   
            {   echo "<tr align='center'>"; 
                echo"<td><font color='black'>" .$test2['topicID']."</font></td>";
                echo"<td><font color='black'>" .$test2['topicDesc']."</font></td>";
                echo "</tr>"; 
               
            }
?>
</table>
</div>
<div >
<table class="table">
  <tr>
    <th>Exam Score</th>
    <th>Status</th>
  </tr>
<?php

                while ($test3 = mysql_fetch_array($result3))
            {   
                $n1=$n1+1;
                $val = 'notcomplete';
                $estatus =$test3['estatus'];
                echo "<tr align='center'>"; 
                echo"<td><font color='black'>" .$test3['escore']."</font></td>";
                if ( $estatus == $val)  {
                   echo"<td> <a href ='exam$n1.php' target='_blank'><center>Attempt</center></a>";  
                echo "</tr>";   
                }
                else{
                echo"<td><span class='fa fa-check'></span>&nbspComplete";  
                echo "</tr>";   
                }
            }
                

            
            
                

            mysql_close($conn);
            ?>

</table>
</div>
</div>

</body>
</html>