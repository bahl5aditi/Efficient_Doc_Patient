<?php
session_start();
?>
<?php
$username=$_POST["username"];
$password=$_POST["password"];

//to prevent mysql injection
/* $username=stripcslashes($username);
$password=stripcslashes($password);
$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password); */
$conn=mysqli_connect("localhost","root","");
if(!$conn)
{
    echo "Not connected to server";
}
if(!mysqli_select_db($conn,"patient"))
{
    echo "Database not selected";
}
//$sql="select * from patient_signup where email='$username' and password='$password'";
$result=mysqli_query($conn,"select * from doctor where email='$username' and password='$password'") or die("Failed to query database".mysql_error());
$row=mysqli_fetch_array($result);
if($row['email']==$username && $row['password']==$password)
{
    $_SESSION["user1"] = "$username";
    echo "login successful";
    header("refresh:0; url=Doctors_portal.php");
}
else{
    echo '<script type="text/javascript">alert("Login unsuccessful");window.location=\'doctor_login.html\';</script>';
}

?>
