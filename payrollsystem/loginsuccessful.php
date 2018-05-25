<html>
<body>
<title>Login Attempt</title>
<body style= "background-color:white">
<center>
	<br>
	<br>
<img src=""  alt="Cannot be Display" width="400" height="110" ><br><br>
</center>

<?php

//create connection
$conn = mysqli_connect ('localhost','root','','finals');

//check connection
if (!$conn){
	die ("Connection Failed". mysqli_connect_error());
}

$username = $_POST["username"];
$userpass = $_POST["userpass"];
$sql = "SELECT * FROM admin WHERE Username='$username' and Userpass='$userpass'";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result)>0){
	
	//output data of each row
	while ($row = mysqli_fetch_assoc($result)){
	echo "<h2> <center> <br><br>Successfully Logged In! <br>";
	echo "<center> <a href=mainpagepayroll.php> </h2> <center>Click Here</center> </a>";
	}
}
else{
	echo "<br><br><br> <center><b>Your Username and Password are Invalid. <br> <a href=login.html><br>LOG IN</center></a>";
}
mysqli_close($conn);
?>
</body>
</html>