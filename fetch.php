<html>

<head>
<style>

table

{

border-style:solid;

border-width:2px;

border-color:pink;

}

</style>

</head>

<body bgcolor="#EEFDEF">

<?php

$con=mysqli_connect("localhost","root","","mydb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


 

//mysql_select_db("emp", $con);

 
$query = "select * from user";
$result = mysqli_query($con, $query);
//$result = mysql_query("SELECT * FROM record");

 

echo "<table border='1'>

<tr>


<th>First Name</th>

<th>Middle Name</th>

<th>Last Name</th>

<th>Email</th>

<th>Password</th>

<th>Mobile</th>
</tr>";

 

while($row = mysqli_fetch_array($result))

  {

  echo "<tr>";

  //echo "<td>" . $row['id'] . "</td>";

  echo "<td>" . $row['First Name'] . "</td>";

  echo "<td>" . $row['Middle Name'] . "</td>";

  echo "<td>" . $row['Last Name'] . "</td>";

  echo "<td>" . $row['Email'] . "</td>";


  echo "<td>" . $row['Password'] . "</td>";

  echo "<td>" . $row['Mobile'] . "</td>";


  echo "</tr>";

  }

echo "</table>";

 

mysqli_close($con);

?>

</body>

</html>

