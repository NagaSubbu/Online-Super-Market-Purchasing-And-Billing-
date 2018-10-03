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
               
               <form action = "bill.php" method = "post">
                Customer Name:<input type="text" class="form-control" name = "nam"><br><br>
				 Customer NO:<input type="number" class="form-control" name = "ph"><br><br>
                Items Name:<select name="name" class="form-control">
<?php   //8825547305;  
        define("SERVER","localhost");
	define("USER","root");
	define("PASS","");
	define("DB","test");
	$conn = mysqli_connect(SERVER,USER,PASS,DB) or die("Invalid database");
	session_start();
		$sql1 = "SELECT items FROM `list`";
		$res1 = mysqli_query($conn,$sql1);
		while($rest1 = mysqli_fetch_array($res1)){ ?>
<option value="<?php echo $rest1['items'];?>" ><?php echo $rest1['items'];?></option>
		<?php } ?></select><br></br>
		 Quantity:<select name="quan" class="form-control">
		<?php	$sql = "SELECT quantity FROM `list`";
		$res = mysqli_query($conn,$sql);
		$rest = mysqli_fetch_array($res); 
		$limit = $rest;
		$i=0;
	while($i<= $limit){?>
		<option value="<?php echo $a[$i++];?>" name  ="quan"><?php echo $a[$i];?></option>
		<?php}  ?></select><br></br>
		<input type="Submit" value="Proceed" name="proceed">
</form>
        <div style = "font-size:11px; color:#cc0000; margin-top:10px"></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>