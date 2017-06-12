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
    margin-top: 79%;
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
   display:flex;  

  }	
	
	h4

 {
  background-image:url("ss.jpg");
  background-repeat: no-repeat;
  background-size: cover;
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

  function checkForm(form)
  {
   if(form.npw.value != "" && form.npw.value == form.cnpw.value) 
	{
		if(form.npw.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        form.npw.focus();
        return false;
       }
      if(form.npw.value == form.nlu.value) {
        alert("Error: Password must be different from Username!");
        form.npw.focus();
        return false;
       }
      re = /[0-9]/;
      if(!re.test(form.npw.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        form.npw.focus();
        return false;
       }
      re = /[a-z]/;
      if(!re.test(form.npw.value)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        form.npw.focus();
        return false;
       }
      re = /[A-Z]/;
      if(!re.test(form.npw.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        form.npw.focus();
        return false;
       }
    
     alert("You entered a valid password: " + form.npw.value);
     return true;
    
	}
else
   {
	alert("The Password and Confiirm password Do not match");
    header("location:signup.php");
   }
	
 }	</script>
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
<div class="l_div">
<h4>
<form action="signups.php" method="post" name="form" onsubmit="return checkForm(this);">
<h3>  <span style="color:#BABAD1;font-weight:bold"><font size="7">Enter Signup Details:</font></span></h3>

<h3>  <span style="color:#BABAD1;font-weight:bold"><font size="5">Login Username:</font></span></h3>
      <span style="color:grey;font-weight:bold"><h5>(Please Enter the Username of your account here)</h5></span><br> 
      <span class="glyphicon glyphicon-user"  style="color:#73ABFF" aria-hidden="true"> 
	  <input type="text" name='nlu' id='nlu101' placeholder="Username" required=""><br>

	  <h3><span style="color:#BABAD1;font-weight:bold"><font size="5">Password:</font></span></h3>
     <span style="color:grey;font-weight:bold"><h5>(Please Enter the Password of your account here)</h5></span><br>
     <span class="glyphicon glyphicon-lock"  style="color:#73ABFF" aria-hidden="true"></span>
     <input type="password" name='npw' id='npw101' placeholder="Password" required=""><br>
    
	<h3><span style="color:#BABAD1;font-weight:bold"><font size="5">Confirm Password:</font></span></h3>
	  <span class="glyphicon glyphicon-lock"  style="color:#73ABFF" aria-hidden="true">
	  <input type="password" name='cnpw' id='cnpw101' placeholder="Confirm Password" required="" ><br>
	
	<h3><span style="color:#BABAD1;font-weight:bold"><font size="5">EmailId:</font></span></h3>
	 <span class="glyphicon glyphicon-send"  style="color:#73ABFF" aria-hidden="true">
	 <input type="email" name='ne' id='ne101' placeholder="EmailId" required=""><br>
	 
	 <h3><span style="color:#BABAD1;font-weight:bold"><font size="5">MobileNo:</font></span></h3>
	 <span class="glyphicon glyphicon-phone-alt"  style="color:#73ABFF" aria-hidden="true">
	 <input type="text" name='nn' id='nn101' placeholder="91+" required="" ><br>
	 <br>

    <h3><span style="color:#BABAD1;font-weight:bold"><font size="5">Select Security Question:</font></span></h3>
	 <span class="glyphicon glyphicon-edit"  style="color:#73ABFF" aria-hidden="true"></span>
	 <select name="select_catalog" id="select_catalog" >
	<option value="What is your mothers birthplace ?">What is your mothers birthplace ?</option>
	<option value="What was your first dog's name ?">What was your first dog's name ?</option>
	<option value="Who is your bestfriend ?">Who is your bestfriend ?</option>
	<option value="Who is your bestfriend ?"></option>
	</select><br>
	 <br>
	
	
	<h3><span style="color:#BABAD1;font-weight:bold"><font size="5">Answer:</font></span></h3>
	 <span class="glyphicon glyphicon-ok"  style="color:#73ABFF" aria-hidden="true">
	 <input type="text" name='sn' id='sa101' placeholder="abcd" required="" ><br>
	 <br>
	 
	 
	 <br>
    <input class="button" type="submit"><span class="glyphicon glyphicon-circle-arrow-down" aria-hidden="true"></span>

</form>

</h4>
</div>
</form>
<footer class="foote">
 <p><span style="color:#8b99a7;font-weight:bold">Posted by:</span> <span style="color:white;font-weight:bold">Sahil Hustu</span>
 <br><span style="color:#8b99a7;font-weight:bold"> Contact information:</span> <a href="mailto:sahilhsutu007@gmail.com">
  sahilhustu007@gmail.com</br></a></p>
</footer>
</body>
</html>