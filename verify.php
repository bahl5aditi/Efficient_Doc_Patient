<?php
if(isset($_GET['vkey'])){
    $vkey=$_GET['vkey'];
    $conn=mysqli_connect("localhost","root","");
    if(!$conn)
{
    echo "Not connected to server";
}
if(!mysqli_select_db($conn,"patient"))
{
    echo "Database not selected";
}
    $result=$conn->query("SELECT verified,vkey FROM  patient_signup WHERE verified=0 AND vkey='$vkey' LIMIT 1");
    if(!empty($result) && $result->num_rows==1){
        $update=$conn->query("UPDATE patient_signup SET verified=1 WHERE vkey='$vkey'LIMIT 1");
    if($update){
        echo "Your account has been Verified!";
    }
    else{
        echo $conn->error; 
    }
}
    else{
        echo"This account is invalid or already verified";
    }
}

?>