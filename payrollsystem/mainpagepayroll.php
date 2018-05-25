<html>
<title>Payroll System</title>
<div align="right"><a href="employee_add.html"><h4 style= "background-color:white;">Add Employee</a>&nbsp&nbsp
<a href="employee_update1.php" >Update Employee</a>&nbsp&nbsp
<a href="emp_delete.php">Delete Employee</a>&nbsp&nbsp
<a href="salaryrecordschoice.php">Input Salary Records</a>&nbsp&nbsp
<a href="viewrecords.php">View Records</a>&nbsp&nbsp
<a href="login.html">Logout</a>
</h3></div><br><br>
<center><img src=""  alt="Cannot be Display" width="400" height="110"></center>
<h2 align="center">List of Employees</h2>
</body>
</html>

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
echo "<th>Ename</th>";
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
echo "</table>";
mysqli_close($conn);
?>