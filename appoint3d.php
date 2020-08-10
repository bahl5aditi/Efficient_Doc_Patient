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
$user1=$_SESSION["user"];
$sql="update patient_signup set Appointment='12:00:00' where email='$user1'";
if(!mysqli_query($conn,$sql))
{
    echo "Not inserted";
}
else{
    echo '<script type="text/javascript">alert("Appointment Fixed");window.location=\'main2.html\';</script>';
}

?>
