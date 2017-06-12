<?php
$un=$_POST['nlu'];
$p=$_POST['npw'];
$pc=$_POST['cnpw'];
$em=$_POST['ne'];
$ph=$_POST['nn'];
$sq=$_POST['select_catalog'];
$an=$_POST['sn'];
   
   $pos = mysqli_connect('localhost','root','','validation')or die('Connectivity to the database wasnt possible , Go back and Try Again');
   $check="SELECT username FROM `newdb` WHERE username='$un'";
   $ppo=mysqli_query($pos,$check);
   if(mysqli_num_rows($ppo)>0)
      { echo"Username already taken";}
   else
   {
	   //passwordd valdation
	   if($p==$pc)
	   {	
		   echo"The password and confirm password match";
			//Entry of data into database
		   $que="INSERT INTO `newdb`(`username`, `password`, `emailid`, `phoneno`, `securityq`, `answer`) VALUES ('".mysql_real_escape_string($un)."','".mysql_real_escape_string($pc)."','".mysql_real_escape_string($em)."','".mysql_real_escape_string($ph)."','".mysql_real_escape_string($sq)."','".mysql_real_escape_string($an)."')";
	       
		   $res=mysqli_query($pos,$que);
           if($res)
            {
               echo"<p>Sucess in Signup</p>";   
			}     
	   
           else
            {
               echo"<p>The password and confirm password do not match, Click the Reregister button to try again</p>";
            }
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
 <form action="signup.php" >
<button class="bttn"> Re register Here !</button>
 </form>
 </body>
 </html>