<?php
	define("CONTACT_EMAIL","aeritestlab@yahoo.com");
	if(isset($_REQUEST['submitcontact'])){
		$date = $_REQUEST['date'];
		$name = $_REQUEST['name'];
		$contact = $_REQUEST['contact'];
		$contactemail = $_REQUEST['contactemail'];
		$contactsubject = $_REQUEST['contactsubject'];
		$contactservice = $_REQUEST['contactservice'];
		$person = $_REQUEST['person'];
		$designation = $_REQUEST['designation'];
		$excellent = $_REQUEST['excellent'];
		$good = $_REQUEST['good'];
		$satisfactory = $_REQUEST['satisfactory'];
		$average = $_REQUEST['average'];
		$excellent1 = $_REQUEST['excellent1'];
		$good1 = $_REQUEST['good1'];
		$satisfactory1 = $_REQUEST['satisfactory1'];
		$signature = $_REQUEST['signature'];
		$future = $_REQUEST['future'];
		$reference = $_REQUEST['reference'];
		$remarks = $_REQUEST['remarks'];
		$comments = $_REQUEST['comments'];
		$reviewed = $_REQUEST['reviewed'];
		$token = mt_rand(000000000001, 999999999999);

		//client Mail Start
			$to = $contactemail;
			$subject = $contactsubject;
				
			$headers = "From: " . CONTACT_EMAIL . "\r\n";
			$headers .= "Reply-To: no-reply@gmail.com \r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

			//message body

			$message = '<html><body>';
			$message .= '<img src="http://aeri.co.in/images/logo1.png" alt="aeri Logo" width="300" height="60" />';
			$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
			$message .= "<tr style='background: #eee;'><td><strong>Date:</strong> </td><td>" . strip_tags($date) . "</td></tr>";
			$message .= "<tr><td><strong>Name:</strong> </td><td>" . strip_tags($name) . "</td></tr>";
			$message .= "<tr><td><strong>Mobile No.:</strong> </td><td>" . strip_tags($contact) . "</td></tr>";
			$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($contactemail) . "</td></tr>";
			$message .= "<tr><td><strong>Any other suggestions for improvement:</strong> </td><td>" . strip_tags($contactsubject) . "</td></tr>";
			if($contactservice != ''){
			$message .= "<tr><td><strong>Your Services:</strong> </td><td>" . strip_tags($contactservice) . "</td></tr>";
			}
			$message .= "<tr><td><strong>Your Subject:</strong> </td><td>" . $subject . "</td></tr>";
			$message .= "<tr><td><strong>Contact Person:</strong> </td><td>" . $person . "</td></tr>";
			$message .= "<tr><td><strong>Designation:</strong> </td><td>" . $designation . "</td></tr>";
			$message .= "<tr><td><strong>Enquiry Handling and Response Time:</strong> </td><td>" . $excellent . "</td></tr>";
			$message .= "<tr><td><strong>Handling of sample:</strong> </td><td>" . $good . "</td></tr>";
			$message .= "<tr><td><strong>Quality of test certificates:</strong> </td><td>" . $satisfactory . "</td></tr>";
			$message .= "<tr><td><strong>Technical knowledge of staff:</strong> </td><td>" . $average . "</td></tr>";
			$message .= "<tr><td><strong>Delivery time (work completion):</strong> </td><td>" . $excellent1 . "</td></tr>";
			$message .= "<tr><td><strong>Presentation of test certificate:</strong> </td><td>" . $good1 . "</td></tr>";
			$message .= "<tr><td><strong>Complaint handling:</strong> </td><td>" . $satisfactory1 . "</td></tr>";
			$message .= "<tr><td><strong>Signature Of Customer With Rubber Stamp:</strong> </td><td>" . $signature . "</td></tr>";
			$message .= "<tr><td><strong>Action Proposed For Future:</strong> </td><td>" . $future . "</td></tr>";
			$message .= "<tr><td><strong>Corrective Action Reference:</strong> </td><td>" . $reference . "</td></tr>";
			$message .= "<tr><td><strong>Remarks:</strong> </td><td>" . $remarks . "</td></tr>";
			$message .= "<tr><td><strong>Comments by Laboratory:</strong> </td><td>" . $comments . "</td></tr>";
			$message .= "<tr><td><strong>Reviewed By Technical Manager / Quality Manager:</strong> </td><td>" . $reviewed . "</td></tr>";
			$message .= "<tr><td><strong>Your Generated Token:</strong> </td><td>" . $token . "</td></tr>";

			$message .= "</table>";
			$message .= "</body></html>";

			//message body End

	        mail($to, $subject, $message, $headers);
	        
	    //client Mail End
	    
	    //Admin Mail
	        $to1 = CONTACT_EMAIL;
			$subject1 = $contactsubject." ".$token;
				
			$headers1 = "From: " . $contactemail . "\r\n";
			$headers1 .= "Reply-To: ". $contactemail ." \r\n";
			$headers1 .= "MIME-Version: 1.0\r\n";
			$headers1 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

			//message body

			$message1 = '<html><body>';
			$message1 .= '<img src="http://aeri.co.in/images/logo1.png" alt="aeri Logo" width="300" height="60" />';
			$message1 .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
			$message1 .= "<tr style='background: #eee;'><td><strong>Date:</strong> </td><td>" . strip_tags($date) . "</td></tr>";
			$message1 .= "<tr><td><strong>Name:</strong> </td><td>" . strip_tags($name) . "</td></tr>";
			$message1 .= "<tr><td><strong>Mobile No.:</strong> </td><td>" . strip_tags($contact) . "</td></tr>";
			$message1 .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($contactemail) . "</td></tr>";
			$message1 .= "<tr><td><strong>Any other suggestions for improvement:</strong> </td><td>" . strip_tags($contactsubject) . "</td></tr>";
			if($contactservice != ''){
			$message1 .= "<tr><td><strong>Your Services:</strong> </td><td>" . strip_tags($contactservice) . "</td></tr>";
			}
			$message1 .= "<tr><td><strong>Your Subject:</strong> </td><td>" . $subject . "</td></tr>";
			$message1 .= "<tr><td><strong>Contact Person:</strong> </td><td>" . $person . "</td></tr>";
			$message1 .= "<tr><td><strong>Designation:</strong> </td><td>" . $designation . "</td></tr>";
			$message1 .= "<tr><td><strong>Enquiry Handling and Response Time:</strong> </td><td>" . $excellent . "</td></tr>";
			$message1 .= "<tr><td><strong>Handling of sample:</strong> </td><td>" . $good . "</td></tr>";
			$message1 .= "<tr><td><strong>Quality of test certificates:</strong> </td><td>" . $satisfactory . "</td></tr>";
			$message1 .= "<tr><td><strong>Technical knowledge of staff:</strong> </td><td>" . $average . "</td></tr>";
			$message1 .= "<tr><td><strong>Delivery time (work completion):</strong> </td><td>" . $excellent1 . "</td></tr>";
			$message1 .= "<tr><td><strong>Presentation of test certificate:</strong> </td><td>" . $good1 . "</td></tr>";
			$message1 .= "<tr><td><strong>Complaint handling:</strong> </td><td>" . $satisfactory1 . "</td></tr>";
			$message1 .= "<tr><td><strong>Signature Of Customer With Rubber Stamp:</strong> </td><td>" . $signature . "</td></tr>";
			$message1 .= "<tr><td><strong>Action Proposed For Future:</strong> </td><td>" . $future . "</td></tr>";
			$message1 .= "<tr><td><strong>Corrective Action Reference:</strong> </td><td>" . $reference . "</td></tr>";
			$message1 .= "<tr><td><strong>Remarks:</strong> </td><td>" . $remarks . "</td></tr>";
			$message1 .= "<tr><td><strong>Comments by Laboratory:</strong> </td><td>" . $comments . "</td></tr>";
			$message1 .= "<tr><td><strong>Reviewed By Technical Manager / Quality Manager:</strong> </td><td>" . $reviewed . "</td></tr>";
			$message1 .= "<tr><td><strong>Your Generated Token:</strong> </td><td>" . $token . "</td></tr>";

			$message1 .= "</table>";
			$message1 .= "</body></html>";

			//message body End

	        mail($to1, $subject1, $message1, $headers1);

	        header('location:index.php');
	    //Admin Mail End    
	}
?>