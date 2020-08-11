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
$sql="select * from administrator where username='$username' and password='$password'";
$result = $conn->query($sql);

if($result->num_rows > 0)
{
   
}
else{
    echo '<script type="text/javascript">alert("Login unsuccessful");window.location=\'administrator_login.html\';</script>';
    
}

$sql="select name,email,speciality from doctor";
$result = $conn->query($sql);
?>
<div class="a2">
<table style="width:50%">
<tr>
    <th>NAME</th>
    <th>EMAIL</th>
    <th>SPECIALITY</th>
    
</tr>
<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo '<td align="center">'. $row["name"]. '</td>';
        echo "<td align='center'>". $row["email"]. "</td>";
        echo "<td align='center'>". $row["speciality"]."</td>";
        //echo "<td><input type='button' class='button button2' name='delete' value='$row['email']'>DELETE</button></td>";
        
        echo "</tr>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>
</table>
<br><br>
<!-- <button class="button button 3" ><a href="doctor_signup.html">ADD A DOCTOR</a></button> -->
<div  class="button_cont" align="left"><a href="doctor_signup.html" class="example_e" target="_blank" rel="nofollow noopener">ADD A DOCTOR</div>
</div>
</body>
</html>
 