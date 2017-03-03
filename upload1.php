 <?php
    require_once("require.php");

    if (isset($_POST['butt'])) {
        if ($_POST['butt'] == "Upload") {

            $target_dir = "upload/";
            $target_file = $target_dir . basename($_FILES["myfile"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

            // Check if file already exists
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["myfile"]["size"] > 5000000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "txt" && $imageFileType != "TXT" && $imageFileType != "doc"
            && $imageFileType != "DOC" ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file)) {
                    echo "The file ". basename( $_FILES["myfile"]["name"]). " has been uploaded.";
                    
                    echo "This is what needs to be stored in the database - " . $target_dir 
                        
                        . basename( $_FILES["myfile"]["name"]);
                    
                    $file_name = $target_dir . basename($_FILES['myfile']['name']);
                    
                    $stmt = "INSERT INTO cv (file_link, student_id, categorie_id) VALUES ('{$file_name}', {$_POST['studentid']}, {$_POST['cat']})";
                    echo $stmt;
                    
                    $result = $conn->query($stmt);
                    
                    if($result) {
                        echo "Well Done";
                    } else {
                        echo 'Don\'t work init';
                    }
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        }
    }


   // require_once 'connection.php';
//    // $conn = mysqli_connect($dbhost, $dbuser, $dbpw, $dbname);
//    
//     $query = "SELECT * FROM category";
//     $results = $conn->query($query);
//    $r = [];
//
//   while($result = mysqli_fetch_object($results))
//    {
//   array_push($r, $result);
//   }
   ?>

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
	  <div class ="about_header"> 
	   <img src = "ku logo.jpg" alt = "logo"/>
		</div>
	  <nav>
	 <ul>
	<li><a href= "home.php">Home</a></li>
	 <li><a href= "contact.php">Contact KU Talent</a></li>
	  <li><a href = "">Career Advice</a></li>
	   <li><a href ="">News</a></li> 
	   <li><a href = "help.php">Help</a></li>
	 </ul>
	 </nav>
	 <div class = "upload_container">
	 <h4>Upload Your CV</h4>
         <form  method="post" action="upload1.php" enctype="multipart/form-data" >
	 <div class = "select1">
         
         <label style="color:blue;">Category</label>
         <select name="cat">
         <?php foreach ($r as $cat): ?>
            <option name="op" value = "<?= $cat->CategoryID ?>">
                <?= $cat->Categoryname ?>
             </option>
             <?php endforeach; ?>
            <option name="cat" value="1">Software Engineer</option>
             <option name="cat" value="2">Web Developer</option>
             <option name="cat" value="3">UX Designer</option>
         </select>    
	 </div>
       <div class="select2">
         <label style="color:blue;">ID</label>
         <input type="text" name="studentid" required/>
         </div>
         <div class="upload_button">
             <input type = "file" name ="myfile"/> 
             <?php
//            $target_file = "";
//             //$target_file = 'C:/windows/users/zack/document/cv.txt';
//             $uploadOK = 1;
//             $filetype = pathinfo($target_file, PATHINFO_EXTENSION);
//             
//            if(file_exists($target_file))
//             {
//              echo "File is already existent";
//             }
             ?>
             
         <br/><br/>
	      <input type="checkbox" name="check" checked/>Click to share CV with employers
         <br/><br/>
           <input type= "submit" name ="butt" value = "Upload"/>
             
         <?php
            
            //$sqlu ="INSERT INTO cv(Filename,CategoryID,StudentID) VALUES('{$_POST['file']}','{$_POST['op']}','{$_POST['studentid']}')"; 
            //$conn->query($sqlu);
         ?>
         </div>
    </form>
         <br><br>
<!--
         <form  method="post" action="upload1.php" enctype="multipart/form-data">
         <label for="myfile">Upload your mfile here</label>
             <input type="file" name="myfile">
             <input type="submit" name="butt" value="Upload">
         </form>
         
-->
         
         
	 <p id = "terms">By submitting your CV,you are agreeing to Kingston University's Terms of Service and agree to be contacted by employers</p>
	 </div>
	   </body>
	 </html>