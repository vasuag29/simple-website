<?php
$database="wholesale"; //database name
$stockdb=$_POST['stock'];
$margindb=$_POST['margin'];
$profitdb=$_POST['profit'];
    $con = mysql_connect("localhost","root" ,"");//for wamp 3rd feild is balnk
    if (!$con)
    {
    die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("$database", $con);

$query = "INSERT INTO profits (stock,margin,profit)VALUES ('$stockdb','$margindb','$profitdb')";
mysql_query($query);
echo '<div>You have succesfully inserted the profit details into the database.</div>';
echo "<div><a href=\"index.html\">Go home</a></div>";
mysql_close();
?>