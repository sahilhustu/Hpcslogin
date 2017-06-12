<?php
	session_start();
	if(isset($_COOKIE['user']) || isset($_SESSION['users']))
	{
	 header("location:main.php");
	}
if(isset( $_SESSION['cnt']))
{
  if($_SESSION['cnt']==0)
  { 
     
	 if(isset( $_SESSION['start']))
	 {
		$_SESSION['c']=time();
		if($_SESSION['c']>$_SESSION['expire'])
		{ 
			$_SESSION['cnt']==2;
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
		    if(isset($_SESSION['c']))
			{
				session_unset($_SESSION['c']);
                session_destroy();
			}
	     Echo"You can try again Now";
		 }
	    else
		{
          header("location:timeout.php");
		}
	 }
	 else 
	{
       header("location:timeout.php");
	 } 
  }
}
?>
<html>
<head>
<link src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<link rel="stylesheet" href="bootstrap-3.3.7-dist\css\bootstrap.min.css">
<title>
Login Redirection Page
</title>
<style>
body
 {
  height: 100%;
  font-family: "Segoe UI", Frutiger, "Frutiger Linotype", "Dejavu Sans", "Helvetica Neue", Arial, sans-serif;
  background-image:url("s.jpg");
  background-size:1200px 700px;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
 
 }
h2
 {
  font-family:Comic Sans MS;
 }
 h3
 {
  font-family: "Segoe UI", Frutiger, "Frutiger Linotype", "Dejavu Sans", "Helvetica Neue", Arial, sans-serif;
 }
.p1
{
        
  background-image:url("ss.jpg");
  border:2px solid black;
  margin-top: 7%;
  margin-left: 10%;
  margin-right: 60%;
  margin-bottom: 20%;
  width:500px;
  padding-top:30px;
  padding-bottom:30px;
  padding-left:60px;
  border-radius: 14px;
  
  font-family: "Segoe UI", Frutiger, "Frutiger Linotype", "Dejavu Sans", "Helvetica Neue", Arial, sans-serif;
  padding-top:20px;
  padding-bottom:20px;
  padding-left:20px;
  padding-right:20px;
  text-align:center;
  clear:both;
   position:relative;
   } 
 
.format
{
  
  font-family: "Segoe UI", Frutiger, "Frutiger Linotype", "Dejavu Sans", "Helvetica Neue", Arial, sans-serif;
  padding-top:10px;
  padding-bottom:10px;
  padding-left:20px;
  padding-right:20px;
  text-align:center;
  } 
 .foote
 {
   
	text-align:center;
    font-family: "Segoe UI", Frutiger, "Frutiger Linotype", "Dejavu Sans", "Helvetica Neue", Arial, sans-serif;
    margin-top: 50%;
    background-color:#0b0d0f;
    padding-top:20px;
    border:2px solid black;
    
 }

 
 .button {
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
 .container 
 {
    width: 300px;
    height: 100px;
    border-radius: 10px;
    border: 1px solid #000;

  }	
	.modify
	{
	width: 300px;
    height: 50px;
    border-radius: 10px;
    border: 1px solid #000;
		
		
	}
	h4

 {
  background-image:url("ss.jpg");
  border:2px solid black;
  margin-top: 5%;
  margin-left:5%;
  margin-right:50%;
  width:500px;
  padding-top:30px;
  padding-bottom:30px;
  padding-left:60px;
  border-radius: 14px;
  clear:both; 
    position:relative; 
 }
 h5{
 
 font-family: "Segoe UI", Frutiger, "Frutiger Linotype", "Dejavu Sans", "Helvetica Neue", Arial, sans-serif;
 
 }
 div{
 float:left;
 width:50%;
 }
 </style>
</head>
<body>
<script type="text/javascript">
 function handleChange(checkbox) 
   {
    
	 
	 if(checkbox.checked == true)
	 {
        document.getElementById("101c").removeAttribute("disabled");
     } 
	else
	 {
        document.getElementById("101c").addAttribute("disabled");
     }
   }
 
   </script>
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://localhost/sahil/welcome.php">Welcome to Tech World <span class="glyphicon glyphicon-tasks" aria-hidden="true"></a>
    </div> <ul class="nav navbar-nav">
      <li class="active"><a href="http://localhost/sahil/slogin.php">Home  <span class="glyphicon glyphicon-home" aria-hidden="true"></a></li>
      <li><a href="http://localhost/sahil/blog.php">Blog  <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></a></li>
      <li><a href="#">Projects  <span class="glyphicon glyphicon-file" aria-hidden="true"></a></li>
      <li><a href="#">Work With Us  <span class="glyphicon glyphicon-tags" aria-hidden="true"></a></li>
      <li><a href="http://localhost/sahil/aboutus.php">About Us  <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></a></li>    
	  <li ><a href="#">Contact Us <span class="glyphicon glyphicon-envelope" aria-hidden="true"></a></li>
	</ul>
  </div>
</nav>
<div id="101dd"></div>
<div class="l_div">
 <h4>
   <form action="redirection.php" method="post">
     <h3><span style="color:#BABAD1;font-weight:bold"><font size="5">Login Username:</font></span></h3>
         <span style="color:grey;font-weight:bold"><h5>(Please Enter the Username of your account here)</h5></span><br> 
         <span class="glyphicon glyphicon-user"  style="color:#73ABFF" aria-hidden="true"> 
	     <input class="modify" type="text" name='lu' id='lu101' placeholder="Username" required=""></span><br>
   <h3><span style="color:#BABAD1;font-weight:bold"><font size="5">Password:</font></span></h3>
       <span style="color:grey;font-weight:bold"><h5>(Please Enter the Password of your account here)</h5></span><br>
       <span class="glyphicon glyphicon-lock"  style="color:#73ABFF" aria-hidden="true"> 
       <input class="modify" type="password" name='pw' id='pw101' placeholder="Password" required=""></span><br>
<br>
<br>
       <input type="checkbox" id="c1" name="aw" value="bb" onchange="handleChange(this)"><span style="color:white;font-weight:bold"> I agree the<a href="http://localhost/sahil/FENIT.pdf" target="_blank" style="text-decoration:none"> terms & conditions</a></span><br>
       <input type="checkbox" name='remember' value="bb"> <span style="color:white;font-weight:bold">Remember Me <br> <a href="http://localhost/sahil/forgot.php" target="_blank" style="text-decoration:none"> Forgot Password ?</a></span><br>
       <button class="button" id="101c" name="submit" aria-label="Left Align" disabled>Submit Here ! <span class="glyphicon glyphicon-circle-arrow-down" aria-hidden="true"></span></button>
</form>
<button class="button"  onclick="location.href='signup.php';">Sign up <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span></button>
</h4>
</div>
<form action="review.php" method="post">
<div class="r_div">
<p class="p1"><br><span style="color:#BABAD1;font-weight:bold">We are a socially responsible company, we have always believed that the best way as a company 
                   we can contribute to our society and this world is by transfer of knowledge and skills to that section of the society which does not belong 
				   to any privileged class; but has the desire to excel and make a mark in this world.
                   Few of them are also proud employees at HPC Sphere.We would surely like your reviews :<br><br> <span class="glyphicon glyphicon-user"  style="color:#73ABFF" aria-hidden="true"> <input class="modify" type="email" id="rreid" name="cem" placeholder="EmailId"> </span><br><br>
 <br><font size="4">Reviews:</font> </span> <br><textarea class="container" id="mytxt" name="rcem" rows="8" cols="70" placeholder='We would be pleased to hear from you :D'> </textarea>
 <button class="button" > Submit Your Review Here</button></p>
 </div>
</form>
 
 <footer class="foote">
 <p><span style="color:#8b99a7;font-weight:bold">Posted by:</span> <span style="color:white;font-weight:bold">Sahil Hustu</span>
 <br><span style="color:#8b99a7;font-weight:bold"> Contact information:</span> <a href="mailto:sahilhsutu007@gmail.com">
  sahilhustu007@gmail.com</br></a></p>
</footer>

</body>
</html>

