<?php
$database="wholesale"; //database name
    $con = mysql_connect("localhost","root" ,"");//for wamp 3rd feild is balnk
    if (!$con)
    {
    die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("$database", $con);

$query = "SELECT * From imp_dates;";
$result = mysql_query($query);
//print_r(mysql_fetch_assoc($result));
?>

<table>
<tr>
	<th>Date</th>
	<th>Event</th>
	</tr>
<?php
while ($row = mysql_fetch_assoc($result) ) {
?>
	<tr>
	<td><?php echo $row['date'] ;?></td>
	<td><?php echo $row['event'] ;?></td>
	</tr>
<?php	
}
?>

</table>
<?php
echo "<div><a href=\"index.html\">Go home</a></div>";
mysql_close();
?>