<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KU Talent CV Website</title>
    <link href = "maincssstyle.css" rel="stylesheet" type = "text/css">
	</head>
	
	<body>
        <?php
         include 'header.php';
        ?>
	      <div class = "register_container">
	    <div class = "register_form">
      <h3> KU Talent Registeration</h3>
	<hr>
	<form method = "post" action = "">
	ID
	<input type = "text" name= "id"/>
        <br/>
	Firstname
	<input type = "text" name = "first"/>
	Lastname
	<input type = "text" name = "last"/>
	<br/>
	Address
	<input type = "text" name = "address" style ="height:100px; width:400px;"/>
        <br/>
	Email
	<input type = "text" name = "email"/>
	Tel Number
	<input type = "text" name = "phone"/>
	Username
	<input type = "text" name = "username"/>
	Password
	<input type = "text" name = "password"/>
	<br/><br/>
	<input type = "submit" value = "Register"/>
	</form>
	</div>
	</div>
	
	<?php
	include 'footer.php';
	?>
	</body>
	</html>
	
	
	
	