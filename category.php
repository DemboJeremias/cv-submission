<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>KU Talent CV Website</title>
     <link href="style.css" rel="stylesheet">
	 
	 </head>
	 <body>
         
     <?php
     include 'header.php';
     ?>
		<div class = "category">
		<nav>
		<ul>
		<li><a href = "welcome.php">Home</a></li>
		</ul>
		</nav>
		</div>
		<div class = "category_container">
		<h1>New Job Category</h1>
		<hr>
		<form method ="post" action="categorydb.php">
		Category ID
		<input type = "text" name = "cid" placeholder = "Enter ID"/>
		<br>
		Category Name
			<input type = "text" name = "catname" placeholder = "Enter Category Name"/>
			<br>
			Staff ID
			<input type = "text" name = "catid" placeholder = "Enter ID"/>
            <br>
			<input type = "submit" value = "ADD" name = "register" />
		</form>
		</div>
            
		<blockquote>      
	 <p>Kingston University<br/>River House. 53-57 High Street<br/>Kingston Upon Thames<br/>Surrey<br/>KT1 1LQ</p>
	 <p>Telephone: +44(0)208417 9000<br/>Email:kutalent@kingston.ac.uk</p>
	 </blockquote>
            
           
		</body>
		</html>