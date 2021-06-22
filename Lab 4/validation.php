<?php
echo $_POST["name"]."<br>";
echo $_POST["username"]."<br>";
echo $_POST["pass"]."<br>";
echo $_POST["cpass"]."<br>";
echo $_POST["email"]."<br>";
echo $_POST["code"]; echo"&nbsp&nbsp"; echo $_POST["number"]."<br>";
echo $_POST["saddress"]."<br>";
echo $_POST["city"]; echo"&nbsp&nbsp"; echo $_POST["state"]."<br>";
echo $_POST["pcode"] ."<br>";
echo $_POST["day"];  echo"&nbsp&nbsp"; echo $_POST["month"] ; echo"&nbsp&nbsp"; echo $_POST["year"]."<br>";
echo $_POST["gender"]."<br>";


$arr = $_POST["media"];

           foreach($arr as $e){
				echo "$e <br>";
			}
			
echo $_POST["bio"];			
			

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
			   <td><input type="text" name="name" placeholder="Name"></td>
		  </tr>
		   <tr>
		       <td>Username:</td>
			   <td><input type="text"name="username" placeholder="Username"></td>
		  </tr>
		   <tr>
		       <td>Password:</td>
			   <td><input type="text" name="pass" placeholder="Password"></td>
		  </tr>
		   <tr>
		       <td>Confirm Password:</td>
			   <td><input type="text" name="cpass" placeholder="Confirm Password"></td>
		  </tr>
		   <tr>
		       <td>Email:</td>
			   <td><input type="text" name="email" Placeholder="Email"> </td>
		  </tr>
		  <tr>
		        <td>Phone:</td>
				<td> <input type="text"  size="3" value="code" name="code" placeholder="Code"><b> &nbsp; - &nbsp;</b><input type="text"  size="8" value="number" name="number" placeholder="Number" ></td>
				
		  </tr>
		   <tr>
		       <td>Address:</td>
			   <td><input type="text" name="saddress" value="street address" Placeholder="Street Address"><br>
			   <input type="text"  size="3" value="city" name="city" Placeholder="city"><b> &nbsp; - &nbsp;</b><input type="text"  size="8" value="state" name="state" placeholder="State" ><br>
			   <input type="text" name="pcode" value="Postal/Zip Code" Placeholder="Postal/Zip Code">
			   </td>
		  </tr>
		  <tr>
		       <td>Birth Date:</td>
			   <td><input type="text"  size="3" name="day" value="day">&nbsp;<input type="text"  size="3" name="month" value="month">&nbsp;<input type="text"  size="3" name="year" value="year"></td>
		  </tr>
		  <tr>
		        <td>Gender:</td>
				<td><input type="radio" value="male" name="gender" >Male   &nbsp; <input type="radio" value="female" name="gender">Female</td>
		  </tr>
		  <tr>
		       <td>Where did you hear<br>about us?</td>
			   <td><input type="checkbox" value="Google" name="media[]">Google<br>
			       <input type="checkbox" value="Blog Post" name="media[]">Blog Post<br>
				   <input type="checkbox" value="New Article" name="media[]">New Article
			   </td>
			   
		  </tr>
		  <tr>
		  <td>Bio</td>
		  <td><textarea name="bio"></textarea> <br><br><td>
		  </tr>
		  
		  <tr>
		  <td colspan="2" align="center"><input type="submit" value="register"><td>
		  </tr>
		  

</table>
</form>
</fieldset>
</body>

</html>