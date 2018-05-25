<?php
$emp_ID = trim($_GET['emp_id']);
$emp_DS = trim($_GET['emp_dateStarted']);
$emp_DE = trim($_GET['emp_dateEnded']);
$emp_DP = trim($_GET['emp_daypresent']);
$emp_TH = trim ($_GET ['emp_TotalHours']);
$emp_RPH = trim($_GET['emp_RateperHour']);
$emp_sss = trim($_GET['emp_sss']);
$emp_ph = trim($_GET['emp_philhealth']);
$emp_pi = trim($_GET['emp_pagibig']);
$emp_ca = trim($_GET['emp_ca']);
$emp_penalty = trim($_GET['emp_penalty']);

//for the calculations
$emp_gross = $emp_TH * $emp_RPH;
$emp_total = $emp_sss + $emp_ph + $emp_pi + $emp_ca + $emp_penalty ;
$emp_net = $emp_gross - $emp_total;

$conn=new mysqli('localhost','root','','finals');
if ($conn->connect_error)
{
	die("Connection Failed " . $conn->connect_error);
}
$sql="Insert into salary_records(EmpID,DateStarted,DateEnd,DaysPresent,TotalHours,RatePerHour,GrossNet,SSS,PhilHealth,PagIbig,CA,Penalty,Net)VALUES('$emp_ID','$emp_DS','$emp_DE','$emp_DP','$emp_TH','$emp_RPH','$emp_gross','$emp_sss','$emp_ph','$emp_pi','$emp_ca','$emp_penalty','$emp_net')";
if(mysqli_query($conn,$sql))
{
	echo"<center>";
	echo "Salary Input Success";
	echo "<br><br>";
}
else
{
	echo "Error :" . $sql ."<br>" . mysqli_error($conn);
	echo "</center>";
}
mysqli_close($conn);
?>
<?php
$conn=new mysqli('localhost','root','','finals');
if(!$conn)
{
die("Connection Failed". mysqli_connect_error());	
}
$sql = "SELECT * FROM salary_records";
$result = mysqli_query($conn,$sql);
echo "<table  width=100%>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Date Started</th>";
echo "<th>Date End</th>";
echo "<th>Days Present</th>";
echo "<th >Total Hours</th>";
echo "<th>Rate Per Hour</th>";
echo "<th>GrossNet</th>";
echo "<th>SSS</th>";
echo "<th>PhilHealth</th>";
echo "<th>PagIbig</th>";
echo "<th>Cash Advance</th>";
echo "<th>Penalty</th>";
echo "<th>Net</th>";
echo "<br><br>";
if(mysqli_num_rows($result)>0){
//output data of each row
while($row=mysqli_fetch_assoc($result)){
 echo "<tr><td align=center>".$row['EmpID']."</td>"."<td align=center>".$row['DateStarted']."</td>"."<td align=center>".$row['DateEnd']."</td>"."<td align=center>".$row['DaysPresent']."</td>"."<td align=center>".$row['TotalHours']."</td>"."<td align=center>".$row['RatePerHour']."</td>"."<td align=center>".$row['GrossNet']."</td>"."<td align=center>".$row['SSS']."</td>"."<td align=center>".$row['PhilHealth']."</td>"."<td align=center>".$row['PagIbig']."</td>"."<td align=center>".$row['CA']."</td>"."<td align=center>".$row['Penalty']."</td>"."<td align=center>".$row['Net']."</td></tr>";
}
}
echo "</table>";
mysqli_close($conn);
echo "<br><br><b>";
echo "<a href='salaryrecordschoice.php'>Input Another Record</a>";
echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
echo "<a href='viewrecords.php'>View Records</a>";
echo "</b>";
?>