<?php
$database="wholesale"; //database name
$ciddb=$_POST['cid'];//this values comes from html file after submitting
$cnamedb=$_POST['cname'];
$caddrdb=$_POST['caddr'];
    $con = mysql_connect("localhost","root" ,"");//for wamp 3rd feild is blank
    if (!$con)
    {
    die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("$database", $con);

$query = "INSERT INTO customers (id,name,address)VALUES ('$ciddb','$cnamedb','$caddrdb')";
mysql_query($query);

echo "<script type='text/javascript'>\n";
echo "alert('You have succesfully inserted the customer information into the database.');\n";
echo "</script>";

mysql_close();
?>