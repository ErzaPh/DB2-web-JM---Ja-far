<html>
<body style= "background-color:white">
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
echo "<th>Lname</th>";
echo "<th>Fname</th>";
echo "<th>Mname</th>";
echo "<th >Ename</th>";
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
 echo "<tr><td align=center>".$row['Emp_ID']."</td>"."<td align=center>".$row['Lname']."</td>"."<td align=center>".$row['Fname']."</td>"."<td align=center>".$row['Mname']."</td>"."<td align=center>".$row['Ename']."</td>"."<td align=center>".$row['Addr']."</td>"."<td align=center>".$row['Contact']."</td>"."<td align=center>".$row['Bdate']."</td>"."<td align=center>".$row['Sex']."</td>"."<td align=center>".$row['Status']."</td>"."<td align=center>".$row['Position']."</td>"."<td align=center>".$row['RatePerHour']."</td>"."<td align=center>".$row['Department']."</td></tr>";
}
}
else{
}
mysqli_close($conn);
?>
<title>Employee Delete</title>

<center>
<img src=""  alt="Cannot be Display" width="400" height="110" >
</center>
<center>
<form action="employee_delete.php" method="POST"><b><br>
<h2>Delete Employee</h2>
Employee Personal Details :
<h4>Fields with <span style="color:red;">*</span> Must be Filled</h4>
Employee ID<span style="color:red;">*</span> &nbsp&nbsp<input placeholder="Employee ID" type="text" name="emp_id" required><br><br>
<span style="color:red;">!! WARNING DELETING EMPLOYEE INFORMATION WILL BE PERMANENT !!</span><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="Submit" value="Delete">
</form>
<br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="mainpagepayroll.php" >Back to Mainpage</a></center>
<br>
</body>
</html>