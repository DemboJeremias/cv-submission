<?php

require_once 'connection.php';
$conn = mysqli_connect($dbhost, $dbuser, $dbpw, $dbname);


$sql= "INSERT IGNORE INTO category(CategoryID, Categoryname, StaffID) VALUES('{$_POST['cid']}','{$_POST['catname']}','{$_POST['catid']}');"; 

$conn->query($sql);

if($_POST['cid']== null || $_POST['catname']== null || $_POST['catid'] == null)
{ 
    include 'validate.php';
}  
   else if ($conn->query($sql)=== TRUE){
    include 'confirmation.php';  

}
else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}   

?>