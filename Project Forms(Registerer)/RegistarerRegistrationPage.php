<?php
$name="";
$err_name="";

$uname="";
$err_uname="";

$nid="";
$err_nid="";


$lnumber="";
$err_lnumber="";
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

$pass="";
$err_pass="";
$cpass="";
$err_cpass="";


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
	
	
	
	
	
	
	
	
	
 
 
 
 if($_SERVER["REQUEST_METHOD"] == "POST")
 {
	 
	 
	 
	 
	 
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
		
		
		
		
		
		
		
		
		if(empty($_POST["uname"])){
			$err_uname="User Name Required";
			$hasError = true;
		}
		else if(strlen($_POST["uname"])<5)
		{
			$err_uname="Username is too short";
			$hasError = true;
			
		}
		else
		{
			$uname=$_POST["uname"];
		}
		
		
		
		
		if(empty($_POST["nid"])){
			$err_nid="NID is Required";
			$hasError = true;
		}
		else if(strlen($_POST["nid"])<9)
		{
			$err_nid="NID should be greater than 9 digit";
			$hasError = true;
			
		}
		else if(!is_numeric($_POST["nid"])){
			$err_nid=" NID Must be Digit";
			$hasError = true;
		}
		else
		{
			$nid=$_POST["nid"];
		}
		
		
		
		
		
		if(empty($_POST["lnumber"])){
			$err_lnumber="Licence is Required";
			$hasError = true;
		}
		else if(strlen($_POST["lnumber"])<9)
		{
			$err_lnumber="Licence should be greater than 9 digit";
			$hasError = true;
			
		}
		else if(!is_numeric($_POST["lnumber"])){
			$err_lnumber=" Licence Must be Digit";
			$hasError = true;
		}
		else
		{
			$lnumber=$_POST["lnumber"];
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
			$err_code="Code should be  3 length of numeric ";
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
		
		  
		
		
		
		
		
		
		
		
		
		if(empty($_POST["pass"])){
			$err_pass="Password Required";
			$hasError = true;
		}
		else if(strlen($_POST["pass"]) <4){
			$err_pass="Password is too short";
			$hasError = true;
		}
		else if(!specialCharCheck($_POST["pass"])){
			$err_pass="Password must have special charecter";
			$hasError = true;
		}
		else if(!numCharCheck($_POST["pass"])){
			$err_pass="Password must have a number";
			$hasError = true;
		}
	    else if(!(lowerCharCheck($_POST["pass"]) and upperCharCheck($_POST["pass"]))){
			$err_pass="Password must be a combination of Upper and Lower case";
			$hasError = true;
		}
		
		else{
			$pass=htmlspecialchars($_POST["pass"]);
		}
		
		                       
							   
							   
							   
							   
							   
							   
							   
							   
							   
							   
		 if(empty($_POST["cpass"])){
			$err_cpass="Confirm Password Required";
			$hasError = true;
		}
		else if($_POST["cpass"] != $_POST["pass"]){
			$err_cpass="Password is not  matching!";
			$hasError = true;
		}
		
		else{
			$cpass=htmlspecialchars($_POST["cpass"]);
		}
				
		
		
		
		
		           
				   
				   
				   if(!$hasError){
			  
			       echo $_POST["name"]."<br>";
				   echo $_POST["uname"]."<br>";
				    echo $_POST["nid"]."<br>";
					 echo $_POST["lnumber"]."<br>";
					  echo $_POST["code"]; echo "&nbsp; - &nbsp;"; echo $_POST["uname"]."<br>";
					   
					    echo $_POST["email"]."<br>";
						 echo $_POST["office"]."<br>";
						  echo $_POST["address"]."<br>";
				    
				           echo "Congratulations! You Have Successfully Created Your Account";
                    
                          }

			
		
		
		
	 
	 
 }


?>




<html>
	
	<body>
	
		<fieldset>
		 
			<form action="" method="POST">
			   <h2 align ="center">Registerer Registration Page<h2>
			   
			   
			   
			   
	   <table align="center">
					
			<tr>
		       <td>Name:</td>
			   <td><input type="text" name="name" name="name" value="<?php echo $name;?>" placeholder="Name"></td>
			   <td><span><?php echo $err_name;?></span></td>
		    </tr>
		    <tr>
		       <td>Username:</td>
			   <td><input type="text"name="uname" value="<?php echo $uname;?>" placeholder="Username"></td>
			   <td><span><?php echo $err_uname;?></span></td>
		    </tr>
			<tr>
		       <td>NID:</td>
			   <td><input type="text" name="nid" name="nid" value="<?php echo $nid;?>" placeholder="NID"></td>
			   <td><span><?php echo $err_nid;?></span></td>
		    </tr>
		    <tr>
		       <td>Licence Number:</td>
			   <td><input type="text"name="lnumber" value="<?php echo $lnumber;?>" placeholder="Licence Number"></td>
			   <td><span><?php echo $err_lnumber;?></span></td>
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
		       <td>Password:</td>
			   <td><input type="password" name="pass"value="<?php echo $pass;?>" placeholder="Password"></td>
			    <td><span><?php echo $err_pass;?></span></td>
		     </tr>
		   <tr>
		       <td>Confirm Password:</td>
			   <td><input type="password" name="cpass" value="<?php echo $cpass;?>"placeholder="Confirm Password"></td>
			    <td><span><?php echo $err_cpass;?></span></td>
		  </tr>				 
					
					
					<tr>
					     <td align="middle"colspan="2" ><input type="submit" value="register"></td>
					</tr>
					
				</table>
			</form>
		</fieldset>
	    <a href="RegistererHomePage.php">Go To Home Page  </a><br><br>
		 <a href="loginPage.php">Back  </a>
	</body>
</html>