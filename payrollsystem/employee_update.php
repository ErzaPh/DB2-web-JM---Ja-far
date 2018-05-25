<html>
<body>
<?php
$emp_id = trim($_POST['emp_id']);
$emp_lname = trim($_POST['emp_lname']);
$emp_fname = trim($_POST['emp_fname']);
$emp_mname = trim($_POST['emp_mname']);
$emp_ename = trim($_POST['emp_ename']);
$emp_addr = trim ($_POST ['emp_addr']);
$emp_contact = trim($_POST['emp_contact']);
$emp_bdate = trim($_POST['emp_bdate']);
$emp_sex = trim($_POST['emp_sex']);
$emp_stat = trim($_POST['emp_stat']);
$emp_pos = trim($_POST['emp_pos']);
$rateperhour = trim($_POST['rateperhour']);
$emp_dep = trim($_POST['emp_dep']);

$conn=new mysqli('localhost','root','','finals');
if ($conn->connect_error)
{
	die("Connection Failed " . $conn->connect_error);
}
$sql="UPDATE `finals`.`emp_info` SET `Lname` = '$emp_lname', `Fname` = '$emp_fname', `Mname` = '$emp_mname', `Addr` = '$emp_addr', `Contact` = '$emp_contact', `Bdate` = '$emp_bdate', `Sex` = '$emp_sex', `Status` = '$emp_stat', `Position` = '$emp_pos', `RatePerHour` = '$rateperhour', `Department` = '$emp_dep' WHERE `Emp_ID` ='$emp_id'";
if(mysqli_query($conn,$sql))
{
	echo"<center>";
	echo "Employee Information Updated!";
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
echo "<th>Rate Per Hour</th>";
echo "<th>Department</th>";
echo "<br><br>";
if(mysqli_num_rows($result)>0){
//output data of each row
while($row=mysqli_fetch_assoc($result)){
 echo "<tr><td align=center>".$row['Emp_ID']."</td>"."<td align=center>".$row['Lname']."</td>"."<td align=center>".$row['Fname']."</td>"."<td align=center>".$row['Mname']."</td>"."<td align=center>".$row['Ename']."<td align=center>".$row['Addr']."<td align=center>".$row['Contact']."<td align=center>".$row['Bdate']."<td align=center>".$row['Sex']."<td align=center>".$row['Status']."<td align=center>".$row['Position']."<td align=center>".$row['RatePerHour']."<td align=center>".$row['Department']."</tr></td>";
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
<a href="employee_update1.php">Update Another Employee</a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href="mainpagepayroll.php">Back to Mainpage</a>
</body>
</html>