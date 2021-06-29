<?php

$name="";
$err_name="";
$uname="";
$err_uname="";
$pass="";
$err_pass="";
$cpass="";
$err_cpass="";
$email="";
$err_email="";
$code= "";
$err_code="";
$number="";
$err_number="";

$saddress="";
$err_saddress="";
$city="";
$err_city="";
$state="";
$err_state="";


$day="";
$err_day="";
$month="";
$err_month="";
$year="";
$err_year="";
 
$gender="";

$uss[]="";
$err_uss="";

$bio="";
$err_bio="";

function usExist($us){
		global $uss;
		foreach($uss as $u){
			if($u == $us){
				return true;
			}
		}
		return false;
	}




 $hasError=false;
 
 
 
 
 
    $days = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);
	$months = array("Jan","Fab","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
	$years = array(1995,1996,1997,1998,1999,2000,2001,2002,2003,2004,2005);
	
	
 
 
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
            if(($pas[$i]) == "#" or ($pas[$i])== "?")  {
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
		
		
		
		
	
		
	    if(empty($_POST["pass"])){
			$err_pass="Password Required";
			$hasError = true;
		}
		else if(strlen($_POST["pass"]) <4){
			$err_pass="Password must be atleast 8 charecter";
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
			$cPass=htmlspecialchars($_POST["cPass"]);
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
		
		                                
										
										
										
										
										
										
										
										
		if(empty($_POST["code"])){
			$err_code="Code Required";
			$hasError = true;
		}
		else if(!is_numeric($_POST["code"])){
			$err_code="Code Must be  Digit";
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
		
		else{
			$number=htmlspecialchars($_POST["number"]);
		}
		
		
		
		
		
		 
				                     
									 
									 
									 
									 
		if(empty($_POST["saddress"])){
			$err_saddress="Street Address Required";
			$hasError = true;
		}
		
		else{
			$saddress=htmlspecialchars($_POST["saddress"]);
		}
		
		if(empty($_POST["city"])){
			$err_city="City Name Required";
			$hasError = true;
		}
		
		else{
			$city=htmlspecialchars($_POST["city"]);
		}
		if(empty($_POST["state"])){
			$err_state="State Name Required";
			$hasError = true;
		}
		
		else{
			$state=htmlspecialchars($_POST["state"]);
		}
				 
				 
			
                                
								
								
								
								
		if(!isset($_POST["day"])){
			$err_day = "Select Day";
			$hasError = true;
		}
		else{
			$day = htmlspecialchars($_POST["day"]);
		}
		if(!isset($_POST["month"])){
			$err_month = "Select Month";
			$hasError = true;
		}
		else{
			$month = htmlspecialchars($_POST["month"]);
		}
		if(!isset($_POST["year"])){
			$err_year = "Select Year";
			$hasError = true;
		}
		else{
			$year = htmlspecialchars($_POST["year"]);
		}




         if(!isset($_POST["gender"])){
			$err_gender="Gender Required";
			$hasError = true;
		}
		else{
			$gender =htmlspecialchars($_POST["gender"]);
		}
                   
				   
				   
				   
				   
	    if(!isset($_POST["usss"])){
			$err_uss="Required";
			$hasError = true;
		}
		else{
			$uss = ($_POST["uss"]);
		}
		
		
		
		if(empty($_POST["bio"])){
			$err_bio="Bio Required";
			$hasError = true;
		}
		else{
			$bio = htmlspecialchars($_POST["bio"]);
		}
			
				 
			if(!$hasError){
			  
			       echo $_POST["name"]."<br>";
				   echo $_POST["uname"]."<br>";
				    echo $_POST["pass"]."<br>";
				   
                    
                          }

			}
			

			
			

?>



<html>
<head></head>
<body>
<fieldset>
<form action="" method="POST">
<h2 align="center">Club Member Registration<h2>
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
		       <td>Password:</td>
			   <td><input type="text" name="pass" placeholder="Password"></td>
			    <td><span><?php echo $err_pass;?></span></td>
		  </tr>
		   <tr>
		       <td>Confirm Password:</td>
			   <td><input type="text" name="cpass" placeholder="Confirm Password"></td>
			    <td><span><?php echo $err_cpass;?></span></td>
		  </tr>
		   <tr>
		       <td>Email:</td>
			   <td><input type="text" name="email" Placeholder="Email"> </td>
			   <td><span><?php echo $err_email;?></span></td>
		  </tr>
		  <tr>
		        <td>Phone:</td>
				<td> <input type="text"  size="3" value="<?php echo $code;?>" name="code" placeholder="Code"><b> &nbsp; - &nbsp;</b><input type="text"  size="8" value="<?php echo $number;?>" name="number" placeholder="Number" ></td>
				<td><span><?php echo $err_code;?>&nbsp; - &nbsp;<?php echo$err_number;?></span></td>
				
		  </tr>
		   <tr>
		       <td>Address:</td>
			   <td><input type="text" name="saddress" value="<?php echo $saddress;?>" Placeholder="Street Address"><br>
			   <input type="text"  size="3" value="<?php echo $city;?>" name="city" Placeholder="city"><b> &nbsp; - &nbsp;</b><input type="text"  size="8" value="<?php echo $state;?>" name="state" placeholder="State" ><br>
			   <input type="text" name="pcode" value="Postal/Zip Code" Placeholder="Postal/Zip Code">
			   </td>
			   <td><span><?php echo $err_saddress;?></span>&nbsp; - &nbsp;<span><?php echo $err_city;?></span>&nbsp; - &nbsp;<span><?php echo $err_state;?></span></td>
		  </tr>
		 
		  
		  
		  
		  
		  
		  
		  <tr>
						<td>Birth Date:</td>
						<td>
							<select name="day">
								<option selected disabled>Day</option>
								<?php
									foreach($days as $d){
										if($day == $d)
											echo "<option selected>$d</option>";
										else
											echo "<option>$d</option>";
									}
								?>
							</select>
							<select name="month">
								<option selected disabled>Month</option>
								<?php
									foreach($months as $m){
										if($month == $m)
											echo "<option selected>$m</option>";
										else
											echo "<option>$m</option>";
									}
								?>
							</select> 
							<select name="year">
								<option selected disabled>Year</option>
								<?php
									foreach($years as $y){
										if($year == $y)
											echo "<option selected>$y</option>";
										else
											echo "<option>$y</option>";
									}
								?>
							</select> 
						</td>
						<td><span><?php echo $err_day;?>&nbsp; - &nbsp;<?php echo $err_month;?>&nbsp; - &nbsp;<?php echo $err_year;?></span></td>
					</tr>
					
					
					
					
		  <tr>
		        <td>Gender:</td>
				<td><input type="radio" value="male" name="gender" <?php if($gender == "male") echo "checked";?>>Male   &nbsp; <input type="radio" value="female" name="gender"<?php if($gender == "female") echo "checked";?>>Female</td>
		  </tr>
		
		
		            <tr>
				     <td align="right">Where did you hear<br/> about us?  </td>
						<td>
							<input type="checkbox" value="A Friend or Colleague" <?php if(usExist("A Friend or Colleague")) echo "checked";?>  name="uss[]"> A Friend or Colleague<br/>
							<input type="checkbox" value="Google" <?php if(usExist("Google")) echo "checked";?> name="uss[]"> Google<br>
							<input type="checkbox" value="Blog Post" <?php if(usExist("Blog Post")) echo "checked";?> name="uss[]"> Blog Post <br/>
							<input type="checkbox" value="News Article" <?php if(usExist("News Article")) echo "checked";?> name="usss[]"> Games
						</td>
						<td><span><?php echo $err_uss;?></span></td>
					</tr>
					
					
					
					
		  <tr>
		  <td>Bio</td>
		  <td><textarea name="bio"><?php echo $bio;?></textarea><td>
		  <td><span><?php echo $err_bio;?></span></td>
		  </tr>
		  
		  <tr>
		  <td colspan="2" align="center"><input type="submit" value="register"><td>
		  </tr>
		  

</table>
</form>
</fieldset>
</body>

</html>