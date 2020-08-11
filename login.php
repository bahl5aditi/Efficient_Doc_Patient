
<?php
$username=$_POST["username"];
$password=$_POST["password"];

$conn=mysql_connect("localhost","root","");
if(!$conn)
{
    echo "Not connected to server";
}
if(!mysql_select_db("Authenticate"))
{
    echo "Database not selected";
}
//$sql="select * from patient_signup where email='$username' and password='$password'";
$result=mysql_query("select * from login where UserId='$username' and Password='$password'") or die("Failed to query database".mysql_error());
$row=mysql_fetch_array($result);
if($row['UserId']==$username && $row['Password']==$password)
{
    echo "login successful";
    
    header("refresh:2; url=appoint.html");
}
else{
    echo "Login unsuccessful";
}

?>
