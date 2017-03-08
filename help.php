<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>KU Talent CV Website</title>
     <link href="maincssstyle.css" rel="stylesheet">
	 
	  <script type = "text/javascript">
	  function help1(){
	   window.location.href = '';
	  }
	  function helpline(){
	   alert("For More Assistance. Call 0208 417 7445");
	  }
	  </script>
	 </head>
	 
	 <body style = "width:100%; height:100%;">
	  <div class ="help_header"> 
	   <img src = "ku logo.jpg" alt = "logo"/>
        <h4> KU Talent Help Centre</h4>
		<form><input type= "text" name ="search" placeholder ="SEARCH"></form>
		<button><a href="authenticate.php">Enquire CV Status</a></button>
	   </div>
	   <div id="help_nav">
	   <ul>
	   <li><a href ="home.php">Home</a></li>
	   <li><a href ="about.php">Using KU Talent</a>
	    <ul>
	       <li><a href = "#">Work Programmes</a></li>
		   <li><a href = "#">Reviewing a CV</a></li>
	       <li><a href = "#">Career Advice</a></li>
		   <li><a href = "#">Submitting a CV</a></li>
	     </ul>
	   </li>
       <li><a href = "">Job Fairs Events</a>
	   <ul>
	   <li><a href = "#">Upcoming University Fairs</a></li>
	   </ul>
	   </li>
	   <li><a href = "">Terms and Conditions</a>
	    <ul>
	   <li><a href = "#"> Our Policies</a></li>
	   </ul>
	   </li>
	   <li><a href = "contact.php">Contact Us</a></li>
	   <li><input type = "button" value = "Helpline" style = "position:relative; left:250px; top:1px;" onclick = "helpline()"/></li>
	 </ul>
	</div>
	
	<div class = "container1">
	<h4> Questions Frequently Asked</h4>
	 <table>
	  <tr>
	   <td><input type ="button" value= "How do I Upload a CV? " onclick = "help1()"/></td>
	    </tr>
	     <tr>
	      <td><input type ="button" value= "How long should a CV be? " onclick = "help1()" style = "width:180px;"/></td>
	       </tr>
	      <tr>
	    <td><input type ="button" value= "Is a cover letter required when uploading a CV for work experience? " onclick = "help1()" style = "width:410px;"/></td>
	  </tr>
	<tr>
  <td><input type ="button" value= "What format is a uploaded CV be in ? " onclick = "help1()" style = "width:230px;"/></td>
</tr>
<tr>
 <td><input type ="button" value= "How long would it take for feedback? " onclick = "help1()" style = "width:230px;"/></td>
  </tr>
	<tr>
	<td><input type ="button" value= "Is an application form required together when uploading a CV? " onclick = "help1()" style = "width:380px;"/></td>
	</tr>
	</table>
	<div id = "helpinfo">
	 <img src = "cv.jpg" alt = "logo"/>
	</div>
	</div>
	
	<div class = "container2">
	 <h4>More Help Information</h4>
	  <div id = "firstinfo">
	  <h3>New Students work opportunities</h3>
	    <h6>KU Talent is a body intoduced to organise and promote experience in working in the industry.Facilitating students across all faculties with
        workshops and careeer events to gain more insights into industry working environments</h6>
	</div>
	 <div id = "secondinfo">
	   <h3>CV Submissions</h3>
	    <h6>KU Talent expects review and ensure all CVs meet a professional standard. One on one sessions are availble with our staff to access and
            provide adequate advice into gaining work experience</h6>
	</div>
	<div id = "thirdinfo" style = "height:150px;">
	   <h3>Find out what Employers Say</h3>
	    <h6>Employers rate work experience to be the popular qualification amongst students</h6>
	</div>
	</div>
	<div class = "container3">
	<h4>Popular topics</h4>
	<table>
	  <tr>
	   <td><input type ="button" value= "How to network with Employers? " onclick = "help1()"/></td>
	   <td><input type ="button" value= "How to improve or exhale in job interviews? " onclick = "help1()"/></td>
	   <td><input type ="button" value= "Is it worth engage in voluntary work for experience? " onclick = "help1()"/></td>
	   <td><input type ="button" value= "Is it worth doing a work placement? " onclick = "help1()"/></td>
	    </tr>
		</table>
	</div>
	 </body>
	 </html>