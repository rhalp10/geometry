<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: loginacc.php"); // Redirecting To Home Page
}
?>