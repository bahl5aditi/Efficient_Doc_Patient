<html>
   <head>
      <title>Creating MySQL Tables</title>
   </head>
   
   <body>
          <?php
    $dbhost="localhost";
    $dbuser="root";
    $dbpass="";
    $db="patient";
    $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
    if(!$conn){
        die('Could not connect'.mysql_error());
    }
    echo "Conn successful";
    /* $sql='CREATE TABLE employee('.
            'id int not null auto_increment,'.
            'name varchar(20) not null,'.
            'age int not null,'.
            'addr varchar(20),'.
            'email varchar(20),'.
            'phone int,'.
            
            'password varchar(10),'.
            'password_r varchar(20),'.
            'primary key(id);';
            
    $retval=Mysql_query($sql,$conn);
    if(!$retval){
        die('Could not create database'.mysql_error());
    }
    
         echo "Table created successfully\n";
         mysql_close($conn); */
      ?>
   </body>
</html>