
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
$speciality=$_POST["speciality"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$password=$_POST["password"];
$sql="INSERT INTO doctor(name,age,email,speciality,phone,password) values('$name','$age','$email','$speciality','$phone','$password')";
if(!mysqli_query($conn,$sql))
{
    echo "Not inserted";
}
else{
    echo '<script type="text/javascript">alert("Doctor Added");window.location=\'main2.html\';</script>';
}
/*header("refresh:2; url=doctor_signup.html");*/
?>

