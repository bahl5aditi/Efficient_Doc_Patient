<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="bg">
        
    
        <div class="a1"><h2>EFFICIENT DOCTOR PATIENT</h2></div>
        <ul>
<li><a class="active" href="main2.html">Home</a></li>
<li><a href="hello.html">News</a></li>
<li><a href="contact.html">Contact</a></li>
<li><a href="about.html">About</a></li>
</ul>
<?php
session_start();
?>
<?php
$conn=mysqli_connect("localhost","root","");
if(!$conn)
{
    echo "Not connected to server";
}
if(!mysqli_select_db($conn,"patient"))
{
    echo "Database not selected";
}
$name=$_POST["name"];
$age=$_POST["age"];
$haemoglobin=$_POST["haemoglobin"];
$bloodgrp=$_POST["bloodgrp"];
$weight=$_POST["weight"];
$height=$_POST["height"];
$iron=$_POST["iron"];
$sql="update patient_signup set haemoglobin='$haemoglobin',weight='$weight',height='$height',bloodgrp='$bloodgrp',iron='$iron' where name='$name' and age='$age'";
if(!mysqli_query($conn,$sql))
{
    echo '<script type="text/javascript">alert("Not Inserted");window.location=\'medical_form.html\';</script>';
}
?>
<div class="a3">
<?php


    echo "<br><br><br><br><br><br>";
    echo "Name: ".$name."<br>";
    echo "Age: ".$age."<br>";
    echo "Haemoglobin: ".$haemoglobin."<br>";
    echo "Blood Group: ".$bloodgrp."<br>";
    echo "Weight: ".$weight."<br>";
    echo "Height: ".$height."<br>";
    echo "Iron: ".$iron."<br>";


// header("refresh:2; url=doctors_portal.php");
?>
</div>
</body>
</html>
