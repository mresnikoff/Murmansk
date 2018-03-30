<!DOCTYPE html>
<html lang="en">
<div class="container">
      <head>
        <meta charset="utf-8">
        <header>
            
        </header>
        <title>HOME</title>
       <link href="https://fonts.googleapis.com/css?family=Cinzel|Lato" rel="stylesheet">
	<!-- link to style.css -->
	<link rel="stylesheet" type="text/css" href="./bootstrap/css/override.css">
</head>
      <body>
      	<?php 
	include 'includes/navigation.php';
	 include 'includes/script.php';
	 ?>
        
        
	<article>
		 <div id = "bodyContainer3">
       <form method="POST" action="studentAdded.php">
	       <div className="formSubTitle">
	           What's your name?
	       </div>
        <input type="text" name="feedbackName" required>
        </input>
        <div className="formSubTitle">
	           Who had the most interesting background?
	       </div>
					<div>
				    <input type="radio" id="choice1"
				     name="studentChoice" value="student">
				    <label for="choice1">Kyle</label>
						<br/>
				    <input type="radio" id="choice2"
				     name="studentChoice" value="student">
				    <label for="choice2">Sid</label>
						<br/>
				    <input type="radio" id="choice3"
				     name="studentChoice" value="student">
				    <label for="choice3">Xiao</label>
						<br/>
						<input type="radio" id="choice4"
				     name="studentChoice" value="student">
				    <label for="choice4">Oliver</label>
				  </div>
          <div className="formSubTitle">
              How Come?
          </div>
          <textarea rows="5" cols="60" name="bio" required>
          </textarea>
					<br/>
					<input type="submit" id="submitButton"
					 name="submitClick" value="Submit">
        </form>
      </div>
   </article>
  </body>
 </html>

		
