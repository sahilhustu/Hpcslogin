<?php
session_start();
if(isset($_SESSION['users']))
 {
    echo("The Session is Set to " . $_SESSION['users'] . ", Welcome to the main page");
    
 } 
else 
{
	echo("Session is not set to " . $_SESSION['users'] . ",please login");
    header("location:slogin.php");
}

if(isset($_SESSION['cnt']))
{
 session_unset($_SESSION['cnt']);
session_destroy();
}
if(isset($_SESSION['start']))
			{
				session_unset($_SESSION['start']);
                session_destroy();
			}

if(isset($_SESSION['expire']))
			{
				session_unset($_SESSION['expire']);
                session_destroy();
			}			
?>
<html>
<head>
</head>
<style>
.bttn{
    background: -webkit-linear-gradient(#0075A6,#003300);
	border-radius: 14px;
	border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
<body>
<form action="logout.php" >
Press the submit button below to logout
<button class="bttn" > Logout!</button>
</form>
</body>
</html>

