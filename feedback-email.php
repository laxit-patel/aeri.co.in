<?php
/* Set e-mail recipient */
$myemail = "aeritestlab@yahoo.com";

/* Check all form inputs using check_input function */
$date = check_input($_POST['date']);
$name = check_input($_POST['name']);
$contact= check_input($_POST['contact']);
$email = check_input($_POST['email']);
$person = check_input($_POST['person']);
$designation = check_input($_POST['designation']);
$excellent = check_input($_POST['excellent']);
$good = check_input($_POST['good']);
$satisfactory = check_input($_POST['satisfactory']);
$average = check_input($_POST['average']);
$excellent1 = check_input($_POST['excellent1']);
$good1 = check_input($_POST['good1']);
$satisfactory1 = check_input($_POST['satisfactory1']);
$suggestions = check_input($_POST['suggestions']);
$signature = check_input($_POST['signature']);
$future = check_input($_POST['future']);
$reference = check_input($_POST['reference']);
$remarks = check_input($_POST['remarks']);
$comments = check_input($_POST['comments']);
$reviewed = check_input($_POST['reviewed']);


/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
show_error("E-mail address not valid");
}
/* Let's prepare the message for the e-mail */

$suggestions = "

Date::- $date
Name::- $name
E-mail::- $email
Contact::- $contact
Contact Person::- $person
Designation::- $designation
Enquiry Handling and Response Time::- $excellent
Handling of sample::- $good
Quality of test certificates::- $satisfactory
Technical knowledge of staff::- $average
Delivery time (work completion)::- $excellent1
Presentation of test certificate::- $good1
Complaint handling::- $satisfactory1
Any other suggestions for improvement::- $suggestions
Signature Of Customer With Rubber Stamp::- $signature
Action Proposed For Future::- $future 
Corrective Action Reference::- $reference
Remarks::- $remarks
Comments by Laboratory::- $comments
Reviewed By Technical Manager / Quality Manager::- $reviewed";

/* Send the message using mail() function */
mail($myemail, $name, $suggestions);

/* Redirect visitor to the thank you page */
header('Location: index.php');
exit();

/* Functions we used */
function check_input($data, $problem='')
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
if ($problem && strlen($data) == 0)
{
show_error($problem);
}
return $data;
}

function show_error($myError)
{
?>
<html>
<body>

<p>Please correct the following error:</p>
<strong><?php echo $myError; ?></strong>
<p>Hit the back button and try again</p>

</body>
</html>
<?php
exit();
}
?>