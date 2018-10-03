<?php
define("SERVER","localhost");
	define("USER","root");
	define("PASS","");
	define("DB","test");
	$conn = mysqli_connect(SERVER,USER,PASS,DB) or die("Invalid database");
	session_start();
if(isset($_POST['proceed']))
{
	$cu_name = $_POST['nam'];
    $cu_num = $_POST['ph'];
    $name = $_POST['name'];
	$quan = $_POST['quan'];
	//echo $name;
	//echo $quan;
	$sqi= "SELECT price FROM `list` WHERE items = '$name' ";
   $res =  mysqli_query($conn,$sqi);
   $res1 = mysqli_fetch_array($res);
   $price = $res1['price'];
   $total = $price * $quan;
  // echo $total;
}

?>
<html>
   <head>
      <title>User Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
			color:blue;
         }
         .box {
            border:black solid 1px;
         }
		 .space{
		 space:100px;}
      </style>
      
   </head>

   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 10px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>User</b></div>
				
            <div style = "margin:30px">
               
               <form action = "users.php" method = "post">
                Customer Name:<?php echo $cu_name; ?> <br><br>
				Customer No:<?php echo $cu_num ; ?> <br><br>
				Amount:<?php echo $total; ?> <br><br>
				
               				<input type = "submit" value = "RoLL Back">
							</form>
				</body>
				</html>

