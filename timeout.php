<?php
session_start();
echo"Your no. of tries to acess the database have finished!";

while(!isset($_SESSION['start']))
{
    $_SESSION['start'] = time();
	$_SESSION['expire']=$_SESSION['start'] + (1 * 60);
}

echo" The start and expire time are:".$_SESSION['start']."&".$_SESSION['expire'];

?>
<html>
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
  text-align:center;
  margin-top: 5%;
  margin-left:5%;
  margin-right:10%;
  margin-left:10%;
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
    margin-top: 64%;
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
#div1 {
  font-size:48px;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
<div id="div1" class="fa"></div>
<span style="color:white;font-weight:bold"><font size="10"><br> You have entered the wrong password more than 2 times . Retry after 1 Minute.</font></span>
<script>
function smile() {
  var a;
  a = document.getElementById("div1");
  a.innerHTML = "&#xf118;";
  setTimeout(function () {
      a.innerHTML = "&#xf11a;";
    }, 1000);
  setTimeout(function () 
      a.innerHTML = "&#xf119;";
    }, 2000);
  setTimeout(function () {
      a.innerHTML = "&#xf11a;";
    }, 3000);
}
smile();
setInterval(smile, 4000);
</script>
</body>
</html>