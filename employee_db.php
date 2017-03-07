<?php
$database="wholesale"; //database name
$eiddb=$_POST['eid']; //this values comes from html file after submitting
$enamedb=$_POST['ename'];
$eagedb=$_POST['eage'];
$esexdb=$_POST['esex'];
$esalarydb=$_POST['esalary'];
$eaddrdb=$_POST['eaddr'];
$edesigdb=$_POST['edesig'];
    $con = mysql_connect("localhost","root" ,"");//for wamp 3rd feild is balnk
    if (!$con)
    {
    die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("$database", $con);

$query = "INSERT INTO employee (id,name,age,sex,salary,address,designation)VALUES ('$eiddb','$enamedb','$eagedb','$esexdb','$esalarydb','$eaddrdb','$edesigdb')";
mysql_query($query);

echo "<script type='text/javascript'>\n";
echo "alert('You have succesfully inserted the Employee record into the database.');\n";
echo "</script>";

mysql_close();
?>