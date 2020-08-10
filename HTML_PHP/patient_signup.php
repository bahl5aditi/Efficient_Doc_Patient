
<?php
$error=NULL;

$conn=mysqli_connect("localhost","root","");
if(!$conn)
{
    echo "Not connected to server";
}
if(!mysqli_select_db($conn,"patient"))
{
    echo "Database not selected";
}
if(isset($_POST['SUBMIT'])){

$name=$_POST["name"];
$age=$_POST["age"];
$addr=$_POST["addr"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$password=$_POST["password"];
$password_r=$_POST["password_r"];
if(strlen($phone)!=10){
    $error= "<p>Invalid length of phone number!</p>";
}
if($password!=$password_r){
    $error.="<p>Your passwords don't match!</p>";
}
if($error){
    echo $error;
}
else{
    $name=$conn->real_escape_string($name);
    $age=$conn->real_escape_string($age);
    $addr=$conn->real_escape_string($addr);
    $email=$conn->real_escape_string($email);
    $phone=$conn->real_escape_string($phone);
    $password=$conn->real_escape_string($password);
    $password_r=$conn->real_escape_string($password_r);

    $vkey=md5(time().$name);

    $password=md5($password);
    $sql="INSERT INTO patient_signup(name,age,addr,email,phone,password,vkey) values('$name','$age','$addr','$email','$phone','$password','$vkey')";
    if(!mysqli_query($conn,$sql))
    {
        echo '<script type="text/javascript">alert("Signup unsuccessful");window.location=\'patient_signup.html\';</script>';
    }
    else{
        echo '<script type="text/javascript">alert("Signup successful!Please verify your email and then login!");window.location=\'patient_login.html\';</script>';
        $to=$email;
        $subject="Healthcare Ltd.-Email Verification";
        $message="Thank you for registering with us!Please click on the link below to verify your account:<br><a href='https://localhost/forms_doctor_patient-20200727T153730Z-001/forms_doctor_patient/verify.php?vkey=$vkey'>Regiter Now!</a>";
        $headers="From:healthcareindia180@gmail.com \r\n";
        $headers.="MIME-Version:1.0"."\r\n";
        $headers.="Content-type:text/html;charset=UTF-8"."\r\n";

        mail($to,$subject,$message,$headers);
        }
    header("refresh:2; url=patient_signup.html");
    }
}

?>

