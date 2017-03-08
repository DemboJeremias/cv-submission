<?php

require_once 'connection.php';
$conn = mysqli_connect($dbhost, $dbuser, $dbpw, $dbname);

$sqls = "INSERT IGNORE INTO student(Knumber, Firstname, Lastname, Address, Email, Phonenumber, Username, Passwords, Accesslevel) VALUES ('{$_POST['id']}','{$_POST['first']}', '{$_POST['last']}', '{$_POST['address']}','{$_POST['email']}','{$_POST['phone']}','{$_POST['username']}','{$_POST['password']}','{$_POST['level']}');";

$sqlk = "INSERT IGNORE INTO kustaff(Knumber,Firstname, Lastname, Address, Email, Phonenumber,Jobtitle, Username, Passwords, Accesslevel) VALUES ('{$_POST['id']}','{$_POST['first']}', '{$_POST['last']}', '{$_POST['address']}','{$_POST['email']}','{$_POST['phone']}','{$_POST['title']}','{$_POST['username']}','{$_POST['password']}','{$_POST['level']}');";

$sqle= "INSERT IGNORE INTO employer(EmployerID, Employername, Address, Email, Telephonenumber, Username, Accesslevel) VALUES('{$_POST['id']}','{$_POST['first']}','{$_POST['address']}','{$_POST['email']}','{$_POST['phone']}','{$_POST['username']}','{$_POST['level']}');"; 


   if($_POST['scheck'] == "student")
    {
     $conn->query($sqls); 
         include 'confirmation.php';
    }
     else if($_POST['scheck']== "kustaff"){
     $conn->query($sqlk);
        include 'confirmation.php';
     }
      else if($_POST['scheck']== "employer"){
      $conn->query($sqle);
           include 'confirmation.php';
      }
    else if(isset($_POST))
     {
   header('location: registeration.php');
   } 
else {
    echo "Error: " . $sqls . "<br>" . $conn->error;
    }


 
?>