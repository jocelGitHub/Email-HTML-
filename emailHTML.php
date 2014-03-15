

<!--  Email HTML File -->
 <?php
// multiple recipients
$to  = 'jocelmandap@gmail.com';

// subject
$subject = 'Jocel Mandap';

// message
$message = "
<html>
<head>
  <title>Message</title>
</head>
<body>
  <h3 style='color:beige'>It is NICE to have an error!!</h3>
  <table>
  	<tr>
  		<td>Name</td>
  		<td>Surname</td>
      <td>Picture</td>
  	</tr>
  	<tr>
  		<td>Jocel</td>
  		<td>Mandap</td>
      <td><img src = '' style = 'width:50;height:50;border-radius:8px;'></td>
  	</tr>
  </table>
</body>
</html>
";

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
// $headers .= "To: Sir Romack <romacknatividad@gmail.com>\r\n";
$headers .= 'From: Jocel <jocelmandap@gmail.com>' . "\r\n";

// Mail it
$retval = mail($to, $subject, $message, $headers);
if($retval === true){
  echo "Message sent.";
}else{
  echo "Failed.";
}
?>