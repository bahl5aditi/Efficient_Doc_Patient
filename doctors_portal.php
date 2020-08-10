<html>
<head>
<title>Doctor's Portal
</title>
<style>
body{
  height: 100%;
  margin:0;
  margin-top:0;
  
}
h1{
    margin-left:500;
    font-family:"Georgia";
    font-size: 28;
    font-style:bold;
    color:#8B5F65;
}
h2{
    margin-left:320;
    font-family:"Georgia";
    font-size: 28;
    font-style:bold;
    
    color:	#CD0000		;

}

.bg {
  /* The image used */
  background-image: url("hush-naidoo-382152-unsplash.jpg");
  
  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat:repeat-y;
  background-size: cover;
  margin-top:0;
}

table{
    margin-left:220;
}
th{
    font-family:"Verdana";
    font-size: 24;
    font-style:bold;
    color:  #8B1A1A;
}
td{
    font-family:"Times New Roman";
    font-size: 24;
    font-style:none;
    color:  black;
}

.button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

.example_e {
    border: none;
    background: #404040;
    color: #ffffff !important;
    font-weight: 100;
    padding: 20px;
    text-transform: uppercase;
    border-radius: 6px;
    display: inline-block;
    font-size: 0.7cm;
    }
    
    .example_e:hover {
    color: #404040 !important;
    font-weight: 700 !important;
    letter-spacing: 3px;
    background: white;
    -webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
    -moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
    transition: all 0.3s ease 0s;
    }

    .button_cont {
        margin-top: 20px;
        margin-bottom: 40px;
    }

</style>
</head>
<body class="bg">
<br>
<h1>HELLO DOCTOR</h1><br>
<h2> HERE ARE YOUR TODAY'S APPOINTMENTS</h2><br>

<?php
session_start();
?>
<div id="ab">
<table >
<tr>
    <th>NAME</th>
    <th>AGE</th>
    <th>ADDRESS</th>
    <th>EMAIL</th>
    <th>PHONE</th>
    <th>APPOINTMENT</th>
    
</tr>

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
 $user1=$_SESSION["user1"];
 $sql="select patient_signup.name,patient_signup.age,patient_signup.addr,patient_signup.email,patient_signup.phone,patient_signup.Appointment from  patient_signup,doctor where patient_signup.dname=doctor.name and doctor.email='$user1'";
 $result = $conn->query($sql);
 
 if(!empty($result) && $result->num_rows>0 )
 {
     while($row = $result->fetch_assoc())
     {
        echo "<tr>";
        echo '<td align="center">'. $row["name"]."\t".'</td>';
        echo '<td align="center">'. $row["age"]."\t". "</td>";
        echo '<td align="center">'. $row["addr"]."\t\t\t"."</td>";
        echo '<td align="center">'. $row["email"]."\t\t\t"."</td>";
        echo '<td align="center">'. $row["phone"]."\t\t\t"."</td>";
        echo '<td align="center">'. $row["Appointment"]."\t\t\t"."</td>";
        //echo '<td>'.'<input type="button" name="HISTORY" value="HISTORY">'.'</td>';
        //echo "<td><a href='medical_form.html'><input type='button' name='history' value='history'></button></td>";
        echo "<td>"." <div  class='button_cont' ><a href='medical_form.html' class='example_e' target='_blank' rel='nofollow noopener'>HISTORY</a></div>"."</td>";
        echo "<br>";
     }
 }
 ?>
</table>
 </div>
</body>
</html>