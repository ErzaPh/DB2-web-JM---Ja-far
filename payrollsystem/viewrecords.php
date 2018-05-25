<html>
<body>
	<title>Records</title>
	<br>
	<center><img src=""  alt="Cannot be Display" width="400" height="110"></center>
	<center>
	<form action="search.php" method="POST"><b><br>
		<h3>Search Employee</h3>
		<table cellpadding="5" cellspacing="1" style="font-size:20px">
			<tr>
				<td align="right">Emp ID:</td>  
				<td align="left"><input type="text" name="emp_id" placeholder="Enter Employee ID" required></td>
			</tr>
		</table>
		<br>
		<input type="Submit" value="Search">
		<br>
	</center>
	</form>
</body>
</html> 
<?php
$conn=new mysqli('localhost','root','','finals');
if(!$conn)
{
die("Connection Failed". mysqli_connect_error());	
}
$sql = "SELECT * FROM salary_records";
$result = mysqli_query($conn,$sql);
echo "<table border='1' style='width:1260px'>";
echo "<tr>";
echo "<th>EmpID</th>";
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
echo "</tr>";
if(mysqli_num_rows($result)>0){
//output data of each row
while($row=mysqli_fetch_assoc($result)){
 echo "<tr><td align=center>".$row['EmpID']."</td>"."<td align=center>".$row['DateStarted']."</td>"."<td align=center>".$row['DateEnd']."</td>"."<td align=center>".$row['DaysPresent']."</td>"."<td align=center>".$row['TotalHours']."</td>"."<td align=center>".$row['RatePerHour']."</td>"."<td align=center>".$row['GrossNet']."</td>"."<td align=center>".$row['SSS']."</td>"."<td align=center>".$row['PhilHealth']."</td>"."<td align=center>".$row['PagIbig']."</td>"."<td align=center>".$row['CA']."</td>"."<td align=center>".$row['Penalty']."</td>"."<td align=center>".$row['Net']."</td></tr>";
}
}
echo "</table>";
mysqli_close($conn);
echo "<br><br><b>";
echo "<center><a href='mainpagepayroll.php'>Back to Main Page</a></center>";
echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
echo "</b>";
?>