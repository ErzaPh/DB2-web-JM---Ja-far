<html>
<body>
<?php
$conn=new mysqli('localhost','root','','finals');
if ($conn->connect_error)
{
	die("Connection Failed " . $conn->connect_error);
}
$emp_id = $_POST['emp_id'];
$sql="DELETE FROM `emp_info` Where `emp_info`.`Emp_ID` ='$emp_id'";
if(mysqli_query($conn,$sql))
{
	echo"<center>";
	echo "Employee Information Deleted!";
}
else
{
	echo "Error :" . $sql ."<br>" . mysqli_error($conn);
	echo "</center>";
}
mysqli_close($conn);
?>

<?php
//create connection
$conn = mysqli_connect('localhost','root','','finals');
//check connection
if(!$conn)
{
die("Connection Failed". mysqli_connect_error());	
}
$sql = "SELECT * FROM emp_info";
$result = mysqli_query($conn,$sql);
echo "<table border='1' style='width:1260px'>";
echo "<tr>";
echo "<th>EmpID</th>";
echo "<th >Last Name</th>";
echo "<th>First Name</th>";
echo "<th>Middle Name</th>";
echo "<th>Extension Name</th>";
echo "<th>Address</th>";
echo "<th>Contact</th>";
echo "<th>Birthdate</th>";
echo "<th>Sex</th>";
echo "<th>Status</th>";
echo "<th>Position</th>";
echo "<th>Department</th>";
echo "<br><br>";
if(mysqli_num_rows($result)>0){
//output data of each row
while($row=mysqli_fetch_assoc($result)){
 echo "<tr><td align=center>".$row['Emp_ID']."</td>"."<td align=center>".$row['Lname']."</td>"."<td align=center>".$row['Fname']."</td>"."<td align=center>".$row['Mname']."</td>"."<td align=center>".$row['Ename']."<td align=center>".$row['Addr']."<td align=center>".$row['Contact']."<td align=center>".$row['Bdate']."<td align=center>".$row['Sex']."<td align=center>".$row['Status']."<td align=center>".$row['Position']."<td align=center>".$row['Department']."</tr></td>";
}
}
else{
	echo "0 Results";
}
echo "</table>";
mysqli_close($conn);
?>
<br>
<br>
<center><a href="emp_delete.php">Delete Another Employee</a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href="mainpagepayroll.php">Back to Mainpage</a></center>
</body>
</html>