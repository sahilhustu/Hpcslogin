<html>
<head>
</head>
<body>
</body>
</html>
<?php
     session_start();
	
	 $e=$_POST['lu'];
     $d=$_POST['pw'];
	 
	 
	if(isset($_POST["submit"]))
	{  
        
      $conn = mysqli_connect('localhost','root','','validation')or die('Connectivity to the database wasnt possible , Go back and Try Again');
	  $query="SELECT * FROM newdb WHERE username='$e' AND password='$d'";
      $res=mysqli_query($conn,$query);
	    if (mysqli_num_rows($res) == 1)
         {
             echo'Welcome'.$e;
		     $_SESSION['users'] = $e;
			 header("location:main.php");
		   
		    if($_POST['remember'] == "bb")
		   {  
	       $cookie_name = "user";
		   $cookie_value = $e;
           setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
           $cookie_name = "pass";
           $cookie_value = $d;
           setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
	       }
		      
		 }
		else
		{
				  
			if(isset($_SESSION['cnt']))
			  {
					$_SESSION['cnt']--;
             
					if($_SESSION['cnt']==0)
					{
	                    //ADD TIMEEERRRRRRRRRRRRRR
					}
			  }   
			else
			{ 
		      $_SESSION['cnt']=2;
			}
			 echo'You entered username or password is incorrect,Retry'.$_SESSION['cnt']."attempts left";
                       
 		   
		}
	     
           
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
<form action="slogin.php" >
Press the Re-Login button below to Tryagain:
<button class="bttn" > Re-Login</button>
</form>
</body>
</html>

