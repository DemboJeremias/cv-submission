<?php
// Create connection
/*
echo '<pre>';
var_dump($_POST);
echo '</pre>';
*/

$dbhost = "localhost";
$dbuser = "dbaccess";
$dbpw = "poo";
$dbname = "cvsubmition";

$conn = mysqli_connect($dbhost,$dbuser,$dbpw,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//$sql ="INSERT INTO student (First_Name, Surname, Address, Email, Telephone, User_Name, Password) VALUES ('{$_POST['first']}', '{$_POST['last']}', '{$_POST['address']}', '{$_POST['email']}', '{$_POST['phone']}', '{$_POST['username']}', '{$_POST['password']}')";
//
////echo $sql;
//
//$conn->query($sql);
//
//if ($conn->query($sql) === TRUE) {
//    echo ("New record created successfully");
//} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//}

// $conn->close();
?>