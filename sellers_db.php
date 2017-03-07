<?php
$database="wholesale"; //database name
$siddb=$_POST['sid'];
$snamedb=$_POST['sname'];
$saddrdb=$_POST['saddr'];
$sstockdb=$_POST['sstock'];
    $con = mysql_connect("localhost","root" ,"");//for wamp 3rd feild is balnk
    if (!$con)
    {
    die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("$database", $con);

$query = "INSERT INTO sellers (id,name,address,stock)VALUES ('$siddb','$snamedb','$saddrdb','$sstockdb')";
mysql_query($query);
echo '<div>You have succesfully inserted the Seller's information into the database.</div>';
echo "<div><a href=\"index.html\">Go home</a></div>";
mysql_close();
?>