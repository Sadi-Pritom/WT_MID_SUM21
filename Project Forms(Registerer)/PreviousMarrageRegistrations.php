<?php
	
	$uname="";
	$email="";
	$phone= "";
	
	$nId= "";
	$addrs="";
	$empty_err="";
	
	
	$hasError=false;
	
	
	
	

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(  empty($_POST["username"]) and empty($_POST["email"]) and empty($_POST["phone"]) and empty($_POST["nid"]))
		
		{
			$empty_err="Nothing is entered";
			$hasError = true;
		}
		else{
			
			$uname=htmlspecialchars($_POST["username"]);
			$email=htmlspecialchars($_POST["email"]);
			$phone=htmlspecialchars($_POST["phone"]);
			
			$nId=htmlspecialchars($_POST["nid"]);
		}
	
		
		if(!$hasError){
			
			//echo $_POST["username"]."<br/>";
			//echo $_POST["email"]."<br/>";
			//echo $_POST["phone"]."<br/>";
		
			//echo $_POST["nid"]."<br/>";
			echo "Result is found";
		}
		
		
	}
?>
<html>
	<head></head>
	<body>
	    <h3 align="center"> Previous Marriage  Registrations List</h3>
		<fieldset>
			<form action="" method="post">
			<h2 align="center">Search Box</h2>
				<table align="center" >
					
					<tr>
						<td align="right">User ID: </td>
						<td><input type="text" name="username"placeholder="User Name" value="<?php echo $uname;?>" ></td>
					</tr>
					
			        <tr>
						<td align="right">NID: </td>
						<td><input type="text" name="nid" placeholder="NID" value="<?php echo $nId;?>"></td>
						
					</tr>
					
					
                    
					
					<tr>
						<td align="right">Contact Number: </td>
						<td><input type="text" name="phone" placeholder="phone" value="<?php echo $phone;?>"></td>
					</tr>
					
				
					
					<tr>
						<td align="right">Email: </td>
						<td><input type="text" name="email"placeholder="Email" value="<?php echo $email;?>"></td>
					</tr>
					
					
					
					
					<tr>
						<td align="center" colspan="2"><input type="submit" value="Search"></td>
					</tr>
					<tr>
						<td align="center" colspan="2"><span><?php echo $empty_err;?></span></td>
					</tr>
					
				</table>
			</form>
		</fieldset>
		<table align="center" >
					<tr>
					  
						<td >Name</td>
						
					</tr>	
					<tr>
						<td >User ID</td>
						<td ><?php echo $uname;?></td>
					</tr>
					<tr>
						
						<td >NID</td>
						<td ><?php echo $nId;?></td>
					</tr>	
                      <tr>
						<td >Fathers's Name</td>
						
					</tr>
                     <tr>
						<td >Mother's Name</td>
						
					</tr>
					<tr>
					 <td>Marital status</td>
					</tr>
                     <tr>
						<td >Present Address</td>
						
					</tr>
                     <tr>
						<td >Gender</td>
						
					</tr>	
                     <tr>
						<td >Age</td>
						
					</tr>
                     <tr>
						<td >Nationality</td>
						
					</tr>
                        <tr>
						<td >Blood Group</td>
						
					</tr>	
                    <tr>
					  <td>Date Of Birth</td>
                      </tr>					
					
					<tr>
						<td >Contact Number</td>
						<td ><?php echo $phone;?></td>
					</tr>
                     <tr> 					
						
						<td >Email</td>
						<td ><?php echo $email;?></td>
					</tr>	
						
						
					
					
		</table>
		<a href="RegistererHomePage.php">Back</a>
	</body>
</html>