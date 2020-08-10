<!DOCTYPE html>
<html>
<head>
<title>List of doctors</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <h3>DOCTORS</h3>
<?php
$conn=mysqli_connect("localhost","root","");
if(!$conn)
{
    echo "Not connected to server";
}
if(!mysql_select_db($conn,"patient"))
{
    echo "Database not selected";
}
$sql="select name,email,speciality from doctor";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"]. " - email: " . $row["email"]. " - speciality: " . $row["speciality"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>
