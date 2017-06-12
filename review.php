<?php
 $c=$_POST['cem'];
 $d=$_POST['rcem'];
 if($c!='' && $d!='')
 {
    $rrw = mysqli_connect('localhost','root','','validation')or die('Connectivity to the database wasnt possible , Go back and Try Again');
    $qry="INSERT INTO `review`(`emailid`, `review`) VALUES ('".mysql_real_escape_string($c)."','".mysql_real_escape_string($d)."')";
    $pp=mysqli_query($rrw,$qry);
     if($pp)
	 {
		 echo"Your review has been sucessfully stored in our database and we would shortly review it and reply on your rovided Email Id";
	 }
 }
 else
 {
	 echo" Either or both the fields are empty , please fill the review to proceed ";
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
<button class="bttn"> Go back!</button>
 </form>
 </body>
 </html>