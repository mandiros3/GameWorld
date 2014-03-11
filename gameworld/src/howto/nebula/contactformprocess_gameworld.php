<?php
	
	/* Subject and Email Variable */
	/* Note: Single Quote for a text string */
	
		

	$webMaster1 = 'sybunlongheng@gmail.com';
	$webMaster2 = 'sereyrathnov@gmail.com';
	$webMaster3 = 'mandirosa3@gmail.com';



	
	/* Gathering Data Variables */
	$name = $_POST ['name'];
	$email = $_POST ['email'];
	$subject = $_POST ['subject'];
	$message = $_POST ['message'];
	
	$emailSubject = "$subject";
	
	$body = <<<EOD
<p style='color:red;'>$name
< $email > </p>
<p style='color:green;'>$subject</p>

<br><br>
<p style='color:gray;'>$message</p> <br>

EOD;
	
	$headers = "From:$email\r\n";
	$headers .= "Content-type:text/html\r\n";
	
	
/* 	This will mail our email */

	$success = mail($webMaster1, $emailSubject, $body , $headers);
	$success = mail($webMaster2, $emailSubject, $body , $headers);
	$success = mail($webMaster3, $emailSubject, $body , $headers);

	

/* Result render as HTML	 */
/* 	You email went though message for the user */

/*  Where to go after the user submits the form ...    */  


$theResults = <<<EDO
<br><hr><br>

<div style='color:green;' > Your Message has been successfully sent. </div>


<p> Name:$name <br> </p>
<p> Email: $email <br> </p>
<p> Subject: $subject <br> </p>
<p> Message: $message <br><hr> </p>
<a href="http://weblab.cs.uml.edu/~bheng/v2/gameworld/index.php"> Go Back </a>

EDO;

echo("$theResults");


	
?>
