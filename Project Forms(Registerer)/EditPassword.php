<?php
	
	$oPass="";
	$err_oPass="";
	$nPass="";
	$err_nPass="";
	$cPass="";
	$err_cPass="";
	$empty_err="";
	
	$hasError=false;
	
	function numCharCheck($pas){
	    for ($i = 0; $i <= strlen($pas)-1; $i++) {
            if(is_numeric($pas[$i]))  {
                return true;
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
            }
        }
		return false;
	}
	function upperCharCheck($pas){
	    for ($i = 0; $i <= strlen($pas)-1; $i++) {
            if(ctype_upper($pas[$i]))  {
                return true;
            }
        }
		return false;
	}
	

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["oPassword"])){
			$err_oPass="Password Required";
			$hasError = true;
		}
		else if(strlen($_POST["oPassword"]) <4){
			$err_oPass="Password must be atleast 4 charecter";
			$hasError = true;
		}
		else if(!specialCharCheck($_POST["oPassword"])){
			$err_oPass="Password must have special charecter";
			$hasError = true;
		}
		else if(!numCharCheck($_POST["oPassword"])){
			$err_oPass="Password must have a number";
			$hasError = true;
		}
	    else if(!(lowerCharCheck($_POST["oPassword"]) and upperCharCheck($_POST["oPassword"]))){
			$err_oPass="Password must be a combination of Upper and Lower case";
			$hasError = true;
		}
		
		else{
			$oPass=htmlspecialchars($_POST["oPassword"]);
		}
		
		if(empty($_POST["nPassword"])){
			$err_nPass="New Password Required";
			$hasError = true;
		}
		
		else{
			$nPass=htmlspecialchars($_POST["nPassword"]);
		}
		
		if(empty($_POST["cPassword"])){
			$err_cPass="Confirm Password Required";
			$hasError = true;
		}
		else if($_POST["oPassword"] != $_POST["nPassword"]){
			$err_cPass="Password doesen't match!";
			$hasError = true;
		}
		else if($_POST["nPassword"] != $_POST["cPassword"]){
			$err_cPass="Password doesen't match!";
			$hasError = true;
		}
		
		else{
			$cPass=htmlspecialchars($_POST["cPassword"]);
		}
	
		
		if(!$hasError){
			
			
			echo "Password is Changed Successfully";
		}
		
		
	}
?>
<html>
	<head></head>
	<body>
	    <h3 align="center">Change My Password</h3>
		<fieldset>
			<form action="" method="post">
				<table align="center">
					<tr>
						<td >Old Password: </td>
						<td><input type="password" name="oPassword" value="<?php echo $oPass;?>"></td>
						<td><span><?php echo $err_oPass;?></span></td>
					</tr>
					<tr>
						<td >New Password: </td>
						<td><input type="password" name="nPassword" value="<?php echo $nPass;?>"></td>
						<td><span><?php echo $err_nPass;?></span></td>
					</tr>
					
					<tr>
						<td >Confirm Password: </td>
						<td><input type="password" name="cPassword" value="<?php echo $cPass;?>"></td>
						<td><span><?php echo $err_cPass;?></span></td>
					</tr>
					
					<tr>
						<td  colspan="2"><input type="submit" value="Done"></td>
					</tr>
					<tr>
						<td  colspan="2"><span><?php echo $empty_err;?></span></td>
					</tr>
					
				</table>
			</form>
		</fieldset>
		<a href="EditMyProfile.php">Back</a>
	</body>
</html>
