<html>
<title>Employee Registration</title>
<body style= "background-color:white">
<center>
	<br>
<img src=""  alt="Cannot be Display" width="400" height="110" ><br><br>
<b><h2>This is for the Salary of the Employees</h2></b>
</center>
<br>
<center>
<h3><a align="left" >Input Salary Records</a>&nbsp&nbsp
<a href="viewrecords.php" align="right">View Records</a>&nbsp&nbsp
</h3>
<form align="center" action="salaryinputadded.php" method="GET" >
<b>
<h3>Employee Salary Input :</h3>
<h5>Fields with <span style="color:red;">*</span> Must be Filled</h5>
<br>
Employee ID<span style="color:red;">*</span> &nbsp&nbsp&nbsp&nbsp <input placeholder="ID Number"  type="text" name="emp_id" required><br><br>
Date Started<span style="color:red;">*</span> &nbsp&nbsp&nbsp&nbsp&nbsp <input placeholder="YYYY-MM-DD"  type="text" name="emp_dateStarted" required><br><br>
Date Ended<span style="color:red;">*</span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input placeholder="YYYY-MM-DD"  type="text" name="emp_dateEnded" required><br><br>
Days Present<span style="color:red;">*</span> &nbsp&nbsp&nbsp&nbsp <input placeholder="Number of Days"  type="text" name="emp_daypresent" required><br><br>
Total Hours<span style="color:red;">*</span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input placeholder="For Days Present"  type="text" name="emp_TotalHours" required><br><br>
Rate Per Hour<span style="color:red;">*</span> &nbsp&nbsp <input placeholder="Employee Rate" type="text" name="emp_RateperHour" required><br><br>
<h3>Deductions :</h3> <br>
SSS<span style="color:red;">*</span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="emp_sss" required><br><br>
Phil-Health<span style="color:red;">*</span> &nbsp&nbsp&nbsp&nbsp <input type="text" name="emp_philhealth" required><br><br>
Pag-Ibig<span style="color:red;">*</span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="emp_pagibig" required><br><br>
C.A<span style="color:red;">*</span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input placeholder="Cash Advance"  type="text" name="emp_ca" required><br><br>
Penalty<span style="color:red;">*</span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input  type="text" name="emp_penalty" required><br><br>
&nbsp&nbsp&nbsp&nbsp <input type="Submit" value="Submit"><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="mainpagepayroll.php">Back to Main Menu</a>

</b>
</form>
</center>

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
echo "<th>Rate Per Hour</th>";
echo "<br><br>";
if(mysqli_num_rows($result)>0){
//output data of each row
while($row=mysqli_fetch_assoc($result)){
 echo "<tr><td align=center>".$row['Emp_ID']."</td>"."<td align=center>".$row['Lname']."</td>"."<td align=center>".$row['Fname']."</td>"."<td align=center>".$row['RatePerHour']."</td></tr>";
}
}
echo "</table>";
mysqli_close($conn);
?>
</body>
</html>
