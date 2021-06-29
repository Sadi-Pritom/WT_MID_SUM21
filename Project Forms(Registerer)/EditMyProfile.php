<?php

$name="";
$err_name="";

$code= "";
$err_code="";

$number="";
$err_number="";

$email="";
$err_email="";

$office="";
$err_office="";

$address="";
$err_address="";



$office="";
$err_office="";

$address="";
$err_address="";

$hasError=false;




function numCharCheck($pas){
	    for ($i = 0; $i <= strlen($pas)-1; $i++) {
            if(is_numeric($pas[$i]))  {
                return true;
                break;
            }
        }
		return false;
	}
	function specialCharCheck($pas){
	    for ($i = 0; $i <= strlen($pas)-1; $i++) {
            if(($pas[$i]) == "!" or ($pas[$i])== "@" or ($pas[$i])== "#" or ($pas[$i])== "$" or ($pas[$i])== "%" or ($pas[$i])== "^" or ($pas[$i])== "&" or ($pas[$i])== "*")  
			{
                return true;
                break;
            }
        }
		return false;
	}
	function lowerCharCheck($pas){
	    for ($i = 0; $i <= strlen($pas)-1; $i++) {
            if(ctype_lower($pas[$i]))  {
                return true;
                break;
            }
        }
		return false;
	}
	function upperCharCheck($pas){
	    for ($i = 0; $i <= strlen($pas)-1; $i++) {
            if(ctype_upper($pas[$i]))  {
                return true;
                break;
            }
        }
		return false;
	}
	
	
	
	

	

	
	

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		
		
		if(empty($_POST["name"])){
			$err_name="Name Required";
			$hasError = true;
		}
		else if(strlen($_POST["name"])<5)
		{
			$err_name="Name is too short";
			$hasError = true;
			
		}
	
		else{
			$name=$_POST["name"];
		}
		
		
		
		
		
		
		if(empty($_POST["code"])){
			$err_code="Code Required";
			$hasError = true;
		}
		else if(!is_numeric($_POST["code"])){
			$err_code="Code Must be  Digit";
			$hasError = true;
		}
		else if(strlen($_POST["code"])<3 || strlen($_POST["code"])>3)
		{
			$err_code="Code should be  3 length of nuneric ";
			$hasError = true;
			
		}
		
		else{
			$code=htmlspecialchars($_POST["code"]);
		}
		
		if(empty($_POST["number"])){
			$err_number="Number Required";
			$hasError = true;
		}
		else if(!is_numeric($_POST["number"])){
			$err_number=" Number Must be Digit";
			$hasError = true;
		}
		else if(strlen($_POST["number"])<11 || strlen($_POST["number"])>11)
		{
			$err_number="Number should be  11 digit";
			$hasError = true;
			
		}
		
		else{
			$number=htmlspecialchars($_POST["number"]);
		}
		
		               
					   
					   
					   
					   
					   
					   
					   
		if(empty($_POST["email"])){
			$err_email="Email Required";
			$hasError = true;
		}
		else if(strpos($_POST["email"], "@")> 0 and (strpos($_POST["email"], ".") > strpos($_POST["email"], "@"))){
			$email=htmlspecialchars($_POST["email"]);
		}
		
		else{
			$err_email="Email is not valid";
			$hasError = true;
		}
		
		
		
		
		
		
		
		if(empty($_POST["office"]))
		  {
			$err_office="Office Required";
			$hasError = true;
		  }
		  else if(strlen($_POST["office"])<5)
		{
			$err_office="Office Name is too Short";
			$hasError = true;
			
		}
		else
		{
			$office=$_POST["office"];
		}
		
		
		
		
		 
		  if(empty($_POST["address"]))
		  {
			$err_address="Address is  Required";
			$hasError = true;
		  }
		  else if(strlen($_POST["address"])<5)
		{
			$err_address="Address is too Short";
			$hasError = true;
			
		}
		else
		{
			$address=$_POST["address"];
		}
		
		  
		
		
		
		
	
		
		
		
		
	}
?>
<html>
	<head></head>
	<body>
	    <h3 align="center">Edit My Profile</h3>
		<fieldset>
			<form action="" method="post">
				<table align="center" >
					<tr>
		       <td>Name:</td>
			   <td><input type="text" name="name" name="name" value="<?php echo $name;?>" placeholder="Name"></td>
			   <td><span><?php echo $err_name;?></span></td>
		      </tr>
					
                    
					
					<tr>
			     <td>Contact number:</td>
				 <td> <input type="text"  size="3"  name="code" value="<?php echo $code;?>" placeholder="Code"> &nbsp; - &nbsp;<input type="text"  size="8"  name="number" value="<?php echo $number;?>"  placeholder="Number" ></td>
				 <td><span><?php echo $err_code;?>&nbsp; - &nbsp;<?php echo$err_number;?></span></td>
					
			      </tr>
				  
				  
				<tr>
		       <td>Email:</td>
			   <td><input type="text" name="email" value="<?php echo $email;?>" Placeholder="Email"> </td>
			   <td><span><?php echo $err_email;?></span></td>
		        </tr>  
					
					
					
				<tr>
						<td >Office</td>
						<td><input type="text"name="office" value="<?php echo $office;?>"Placeholder="Office"></td>
						 <td><span><?php echo $err_office;?></span></td>
				</tr>
				
				
				
				
				
				<tr>
						<td>Address</td>
						<td><input type="text" name="address" value="<?php echo $address;?>"Placeholder="Address"></td>
						 <td><span><?php echo $err_address;?></span></td>
					
			       
				   
				   </tr>
					
						
					   <tr>	
						<td  colspan="2"><input type="submit" value="Done"><br><br><br></td>
					</tr>
					
				
					</tr>
					
						
					 <tr>	
						<td><a href="EditPassword.php">Change Password?</a></td>
					</tr>
					
					
				</table>
			</form>
		</fieldset>
		<a href="RegistererProfilePage.php">Back</a><br><br>
		<a href="RegistererHomePage.php">BackHomepage</a>
	</body>
</html>
