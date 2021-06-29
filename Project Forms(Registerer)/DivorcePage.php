<?php


$registrationid="";
$err_registrationid="";
$registererid="";
$err_registererid="";
$groomid="";
$err_groomid="";
$brideid="";
$err_brideid="";
$day="";
$err_day="";
$month="";
$err_month="";
$year="";
$err_year="";

$mastatus="";
$err_mstatus="";


$hasError=false;

    $mss=array("Married","Devorced");
    $days = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);
	$months = array("Jan","Fab","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
	$years = array(1995,1996,1997,1998,1999,2000,2001,2002,2003,2004,2005);
	
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if(empty($_POST["registrationid"])){
			$err_registrationid="Registration ID Required";
			$hasError = true;
		}
		else if(!is_numeric($_POST["registrationid"])){
			$err_registrationid=" ID must be Digit";
			$hasError = true;
		}
		else if(strlen($_POST["registrationid"])<10 || strlen($_POST["registrationid"])>11)
		{
			$err_registrationid="ID should be  10 digit";
			$hasError = true;
			
		}
		
		else{
			$registrationid=htmlspecialchars($_POST["registrationid"]);
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
		
		
		
		
		
		
		
		
		if(empty($_POST["registererid"])){
			$err_registererid="Registration ID Required";
			$hasError = true;
		}
		else if(!is_numeric($_POST["registererid"])){
			$err_registererid=" ID must be Digit";
			$hasError = true;
		}
		else if(strlen($_POST["registererid"])<10 || strlen($_POST["registererid"])>11)
		{
			$err_registererid="ID should be  10 digit";
			$hasError = true;
			
		}
		
		else{
			$registererid=htmlspecialchars($_POST["registererid"]);
		}
		
		
		
		
		
		if(empty($_POST["groomid"])){
			$err_groomid="Groom ID Required";
			$hasError = true;
		}
		else if(!is_numeric($_POST["groomid"])){
			$err_groomid=" ID must be Digit";
			$hasError = true;
		}
		else if(strlen($_POST["groomid"])<10 || strlen($_POST["groomid"])>11)
		{
			$err_groomid="ID should be  10 digit";
			$hasError = true;
			
		}
		
		else{
			$groomid=htmlspecialchars($_POST["groomid"]);
		}
		
		
		
		
		
		
		if(empty($_POST["brideid"])){
			$err_brideid="Bride ID Required";
			$hasError = true;
		}
		else if(!is_numeric($_POST["brideid"])){
			$err_brideid=" ID must be Digit";
			$hasError = true;
		}
		else if(strlen($_POST["brideid"])<10 || strlen($_POST["brideid"])>11)
		{
			$err_brideid="ID should be  10 digit";
			$hasError = true;
			
		}
		
		else{
			$brideid=htmlspecialchars($_POST["brideid"]);
		}
		
		
		if(!isset($_POST["mstatus"])){
			$err_mstatus = "Select Marital Status";
			$hasError = true;
		}
		else{
			$mstatus = htmlspecialchars($_POST["mstatus"]);
		}
		
		
		if(!$hasError){
			
			
			echo "Divorced Successfully";
		}
		
		
		
	}
?>





<html>
	
	<body>
	
		<fieldset>
		 
			<form action="" method="POST">
			   <h2 align ="center"> Divorce <h2>
			   <br>
				<table align="center">
					
					<tr>
						<td align = "right"><b>Registration ID</b></td>
						<td><input type="text" name="registrationid"  value="<?php echo $registrationid;?>" placeholder="Registration ID"></td>
						 <td><span><?php echo $err_registrationid;?></span></td>
					</tr>
					
					
					
					
					
					
					
				
				 <tr>
						<th align="right">Date</th>
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
						<td align = "right"><b>Registerer ID</b></td>
						<td><input type="text" name="registererid" value="<?php echo $registererid;?>" placeholder="Registration ID"></td>
						 <td><span><?php echo $err_registererid;?></span></td>
					</tr>
					
					
					
					
					<tr>
						<td align = "right"><b>Groom ID</b></td>
						<td><input type="text" name="groomid" value="<?php echo $groomid;?>" placeholder="Groom ID" ></td>
						 <td><span><?php echo $err_groomid;?></span></td>
					</tr>
				
					<tr>
						<td align = "right"><b>Bride ID</b></td>
						<td><input type="text" name="brideid" value="<?php echo $brideid;?>" placeholder="Bride ID" ></td>
						 <td><span><?php echo $err_brideid;?></span></td>
					</tr>
					<tr>
						<td align = "right"><b>Marital Status</b></td>
						<td>
						<select name="mstatus">
						<option selected disabled>select</option>
						    <?php
									foreach($mss as $s){
										if($mstatus == $s)
											echo "<option selected>$s</option>";
										else
											echo "<option>$s</option>";
									}
								?>
								
						</select>		
						</td>
						<td><span><?php echo $err_mstatus;?></span></td>
					</tr>
					
					
					
					
					     <td align="middle"colspan="2" ><input type="submit" value="register" ></td>
						
					</tr>
					
				</table>
					
			</form>
			
		</fieldset>
		<a href="RegistererHomePage.php">Back</a>
	
	</body>
</html>