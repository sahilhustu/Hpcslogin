
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
<form method='post'>
<h3><span style="color:#BABAD1;font-weight:bold"><font size="5">Select Security Question:</font></span></h3>
	 <span class="glyphicon glyphicon-edit"  style="color:#73ABFF" aria-hidden="true"></span>
	 <select name="sc" id="sc" >
	<option value="What is your mothers birthplace ?">What is your mothers birthplace ?</option>
	<option value="What was your first dog's name ?">What was your first dog's name ?</option>
	<option value="Who is your bestfriend ?">Who is your bestfriend ?</option>
	<option value="Who is your bestfriend ?"></option>
	</select><br>


<h3><span style="color:#BABAD1;font-weight:bold"><font size="5">Answer:</font></span></h3>
	 <span class="glyphicon glyphicon-ok"  style="color:#73ABFF" aria-hidden="true">
	 <input type="text" name='scn' id='sa101' placeholder="abcd" required="" ><br>
	 <br>
	 
<h3><span style="color:#BABAD1;font-weight:bold"><font size="5">Enter New Pssword:</font></span></h3>
	 <span class="glyphicon glyphicon-ok"  style="color:#73ABFF" aria-hidden="true">
	 <input type="text" name='n' id='n101' placeholder="abcd" required="" ><br>
	 <br>
	 
<input type="submit" name='ss' id='ss101' >
</form>	 
	 
</body>
<?php
if(isset($_POST['n']))
{	
    $sq=$_POST['sc'];
	$an=$_POST['scn'];
	$nnp=$_POST['n'];
 
	$pqa = mysqli_connect('localhost','root','','validation')or die('Connectivity to the database wasnt possible , Go back and Try Again');
    $checks="SELECT username FROM `newdb` WHERE securityq='$sq' AND answer='$an'";
    $pps=mysqli_query($pqa,$checks);
    if(mysqli_num_rows($pps)>0)
    {
	   $dus="UPDATE `newdb` SET `password`='$nnp' WHERE answer='$an'";
       $pps=mysqli_query($pqa,$dus);
       echo"Your password has been updated";
	   }
    else
    {
	 echo"The security question and the answer entered do not match";  
    }
}	
	   
	   
?>
</html>
	 