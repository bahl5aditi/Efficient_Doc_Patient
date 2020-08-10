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
$Doctor=$_POST["Doctor"];
$user1=$_SESSION["user"];
$sql="update patient_signup set dname='$Doctor' where email='$user1'";
if(!mysqli_query($conn,$sql))
{
    echo "Not inserted";
}
else{
   // echo "Inserted";
    header("refresh:0; url=appoint2.php");
}

?>

