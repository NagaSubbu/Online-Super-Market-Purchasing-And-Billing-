
		<html>
   <head>
      <title>Admin Page</title>
      
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
         <div style = "width:350px; border: solid 5px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Welcome Admin</b></div>
				
            <div style = "margin:30px">
<form action = "admin_action.php" method = "post">
                   <label>Item Name:</label><input type = "text" name = "name" class = "box" /><br /><br />
                  <label>Qantity:</label><input type = "number" name = "pass" class = "box"  /><br/><br />
                  <label>Price:</label><input type = "number" name = "pri" class = "box"  /><br/><br />
                  <input type = "submit" name ="submit" value = " Insert" > 
               <input type = "submit" name ="view" value = " View" > 
			   </form>
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"></div>
				</body>
	</html>