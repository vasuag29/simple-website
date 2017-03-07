<?php
$database="wholesale"; //database name
    $con = mysql_connect("localhost","root" ,"");//for wamp 3rd feild is balnk
    if (!$con)
    {
    die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("$database", $con);

$query = "SELECT * From defaulters;";
$result = mysql_query($query);
//print_r(mysql_fetch_assoc($result));
?>

<table>
<tr>
	<th>Defaulter ID</th>
	<th>Name</th>
	<th>Pending Payment</th>
	</tr>
<?php
while ($row = mysql_fetch_assoc($result) ) {
?>
	<tr>
	<td><?php echo $row['id'] ;?></td>
	<td><?php echo $row['name'] ;?></td>
	<td><?php echo $row['pending'] ;?></td>
	</tr>
<?php	
}
?>

</table>
<?php
echo "<div><a href=\"index.html\">Go home</a></div>";
mysql_close();
?>