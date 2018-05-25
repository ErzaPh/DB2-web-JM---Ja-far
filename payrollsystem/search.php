<html>
<body style= "background-color:white">
	<title>Search Employee</title>
	<center>
	<br>
	<br>
	<!--LOGO-->
	<img src=""  alt="Cannot be Display" width="400" height="110">
	</center>

<?php

//create connection
$conn = mysqli_connect ('localhost','root','','finals');

//check connection
if (!$conn){
	die ("Connection Failed". mysqli_connect_error());
}

$emp_id = $_POST["emp_id"];
$sql = "SELECT * FROM salary_records WHERE EmpID='$emp_id'";
$result = mysqli_query($conn,$sql);

echo "<table border='1' style='width:1260px'>";
echo "<tr>";
echo "<th>EmpID</th>";
echo "<th>Date Started</th>";
echo "<th>Date End</th>";
echo "<th>Days Present</th>";
echo "<th>Total Hours</th>";
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

if (mysqli_num_rows($result)>0){
	
	//output data of each row
	while ($row = mysqli_fetch_assoc($result)){
 echo "<tr><td align=center>".$row['EmpID']."</td>"."<td align=center>".$row['DateStarted']."</td>"."<td align=center>".$row['DateEnd']."</td>"."<td align=center>".$row['DaysPresent']."</td>"."<td align=center>".$row['TotalHours']."</td>"."<td align=center>".$row['RatePerHour']."</td>"."<td align=center>".$row['GrossNet']."</td>"."<td align=center>".$row['SSS']."</td>"."<td align=center>".$row['PhilHealth']."</td>"."<td align=center>".$row['PagIbig']."</td>"."<td align=center>".$row['CA']."</td>"."<td align=center>".$row['Penalty']."</td>"."<td align=center>".$row['Net']."</td></tr>";
 echo "<br>";
	}
}
else{
	echo "<br><br><br> <h3><center><b>Employee ID not found.</center></h3>
	<center><a href=viewrecords.php><br>BACK</center></a>";
	echo "<br>";
	echo "<br>";
}
mysqli_close($conn);
?>
 <br><br><center><a href=viewrecords.php><br>BACK</a>;
 <br> <a href=mainpagepayroll.php><br>Back to Main Page</center></a>;
</body>
</html>