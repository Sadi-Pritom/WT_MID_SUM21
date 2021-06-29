<?php
$bridename="";
$brideid="";
$bridenid="";
$groomname="";
$groomid="";
$groomnid="";
$hasError=false;
	
	
	
	
	
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["bridenid"]) and empty($_POST["groomnid"]))
		
		{
			$empty_err="Nothing is entered";
			$hasError = true;
		}
		else{
			$bridenid=htmlspecialchars($_POST["bsearch"]);
			$groomnid=htmlspecialchars($_POST["gsearch"]);
			
		}
	
		
		if(!$hasError){
			echo $name."<br>";
			echo $_POST["bsearch"]."<br/>";
			echo $_POST["gsearch"]."<br/>";
			
		}
		
		
	}



?>



<html>
	
	<body>
	            <h2 align="center">  Marrage Registration  </h2>    
		<fieldset>
		  
			<form action="" method="post">
			
			
			  
			   <br>
				<table align="left">
					
					<tr>
					<td><h3>Groom</h3></td>
					</tr>
					
					<tr>
						<td align = "right"><b>Groom NID</b></td>
					
						<td><input type="search" placeholder="Groom Search" name="gsearch"></td>
					     <td><input type="submit" value="search Groom"></td>
						
						
					</tr>
					
					<tr>
						<td align = "right"><b>Groom Name</b></td>
						<td><input type="text"></td>
					</tr>
					<tr>
						<td align = "right"><b>Groom ID</b></td>
						<td><input type="text"></td>
					</tr>
					<tr>
						<td align = "right"><b>Groom NID</b></td>
						<td><input type="text"></td>
					</tr>
			    </table>
				
			</form>	
			<form>
				
				<table align="right">
				
					<tr>
					<td><h3>Bride</h3></td>
					</tr>
					 
					 <tr>
						<td align = "right"><b>Groom NID</b></td>
					
						<td><input type="search" placeholder="Bride Search" name="bsearch"></td>
					     <td><input type="submit" value="search Bride"></td>
						
						
					</tr>
					 
					 
					 <tr>
						<td align = "right"><b>Bride NID</b></td>
						
						<td><input type="search" placeholder="Bride Search" name="bsearch" ></td>
					
						
					</tr>
					<tr>
						<td align = "right"><b>Bride Name</b></td>
						<td><input type="text"></td>
					</tr>
					<tr>
						<td align = "right"><b>Bride ID</b></td>
						<td><input type="text"></td>
					</tr>
					<tr>
						<td align = "right"><b>Bride NID</b></td>
						<td><input type="text"></td>
					</tr>
					
					
					
				</table>
			</form>	
			<form>
				<table align="center">
					
					<tr>
						<td align = "right"><b>Registration ID</b></td>
						<td><input type="text"></td>
					</tr>
					<tr>
						<td align = "right"><b>Registerer Name<b></td>
						<td><input type="text"></td>
					</tr>
					<tr>
						<td align = "right"><b>Registerer ID</b></td>
						<td><input type="text"></td>
					</tr>
					<tr>
						<td align = "right"><b>Registerer NID</b></td>
						<td><input type="text"></td>
					</tr>
					<tr>
						<td align = "right"><b>Date</b></td>
						<td><input type="text"></td>
					</tr>
					<tr>
						<td align="center" colspan="2"><input type="submit" value="submit"></td>
						
					</tr>
					
					
					
					
					
					
				</table>
				
				
			</form>
			
		</fieldset>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<br><br><br><br><br>
		<a href="CongratulationsPage.php">nextpage</a><br>
		<a href="RegistererHomePage.php">Back</a>
	
	</body>
</html>