<?php
$database="wholesale"; //database name
    $con = mysql_connect("localhost","root" ,"");//for wamp 3rd feild is balnk
    if (!$con)
    {
    die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("$database", $con);

$query = "SELECT * From employee;";
$result = mysql_query($query);
//print_r(mysql_fetch_assoc($result));
?>

<table>
<tr>
	<th>Employee id</th>
	<th>Name</th>
	<th>Age</th>
	<th>Sex</th>
	<th>Salary</th>
	<th>Address</th>
	<th>Designation</th>
	</tr>
<?php
while ($row = mysql_fetch_assoc($result) ) {
?>
	<tr>
	<td><?php echo $row['id'] ;?></td>
	<td><?php echo $row['name'] ;?></td>
	<td><?php echo $row['age'] ;?></td>
	<td><?php echo $row['sex'] ;?></td>
	<td><?php echo $row['salary'] ;?></td>
	<td><?php echo $row['address'] ;?></td>
	<td><?php echo $row['designation'] ;?></td>
	</tr>
<?php	
}
?>

</table>
<?php
echo "<div><a href=\"index.html\">Go home</a></div>";
mysql_close();
?>