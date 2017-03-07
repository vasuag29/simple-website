<?php
$database="wholesale"; //database name

    $con = mysql_connect("localhost","root" ,"");//for wamp 3rd feild is balnk
    if (!$con)
    {
    die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("$database", $con);

$query = "INSERT INTO stock (name,regno,bday,sex,deptno)VALUES ('$namedb','$regnodb','$bdaydb','$sexdb','$deptdb')";
mysql_query($query);
echo '<div>You have succesfully inserted the Stock record into the database.</div>';
echo "<div><a href=\"index.html\">Go home</a></div>";
mysql_close();
?>