<?php
$database="wholesale"; //database name
$diddb=$_POST['did'];//this values comes from html file after submitting
$dnamedb=$_POST['dname'];
$pendingdb=$_POST['pending'];
    $con = mysql_connect("localhost","root" ,"");//for wamp 3rd feild is blank
    if (!$con)
    {
    die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("$database", $con);

$query = "INSERT INTO defaulters (id,name,pending)VALUES ('$diddb','$dnamedb','$pendingdb')";
mysql_query($query);

echo "<script type='text/javascript'>\n";
echo "alert('You have succesfully inserted the defaulters' record into the database.');\n";
echo "</script>";

mysql_close();
?>