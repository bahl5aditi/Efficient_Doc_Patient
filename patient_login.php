<?php
// Start the session
session_start();

?>
<?php

$conn=mysqli_connect("localhost","root","");
$username=$conn->real_escape_string($_POST['username']);
$password=$conn->real_escape_string($_POST['password']);
$password=md5($password);
//echo $password;
if(!$conn)
{
    echo "Not connected to server";
}
if(!mysqli_select_db($conn,"patient"))
{
    echo "Database not selected";
}

//to prevent mysql injection
//$username=stripcslashes($username);

//$sql="select * from patient_signup where email='$username' and password='$password'";
// $sql="select * from patient_signup where username='$username' and password='$password'";
// $result = $conn->query($sql);
$result=mysqli_query($conn,"select * from patient_signup where email='$username' and password='$password'") or die("Failed to query database".mysql_error());
$row=mysqli_fetch_array($result);
if($row['email']==$username && $row['password']==$password)
{
    $verified=$row['verified'];
    $email=$row['email'];
    $date=$row['createdate'];
    $date=strtotime($date);
    $date=date('M d Y',$date);
    if(!empty($verified) && $verified==1){
    //echo '<script type="text/javascript">alert("Login successful")>;window.location=\'patient_login.html\';</script>';
    echo '<script type="text/javascript">alert("Login successful!");window.location=\'patient_login.html\';</script>';
    $_SESSION["user"] = "$username";
    header("refresh:0; url=appoint.html");
    }
    else{
       echo '<script type="text/javascript">alert("This account has not been verified.The verification mail was sent to $email on $date ");window.location=\'patient_login.html\';</script>';
       header("refresh:0; url=main2.html");
    }
}
else{
    echo '<script type="text/javascript">alert("Login unsuccessful");window.location=\'patient_login.html\';</script>';
    header("refresh:0; url=main2.html");
}
?>
