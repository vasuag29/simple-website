<?php
$database="wholesale"; //database name
$impdatedb=$_POST['impdate'];
$impeventdb=$_POST['impevent'];
    $con = mysql_connect("localhost","root" ,"");//for wamp 3rd feild is balnk
    if (!$con)
    {
    die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("$database", $con);

$query = "INSERT INTO imp_dates (date,event)VALUES ('$impdatedb','$impeventdb')";
mysql_query($query);

echo "<script type='text/javascript'>\n";
echo "alert('You have succesfully inserted the important dates record into the database.');\n";
echo "</script>";

mysql_close();
?>