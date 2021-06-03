<?php
  $to_email = 'sarah@sudo.ca';
  $from_name = $_POST['name'];
  $from_email = preg_replace('/[nr|!/<>^$%*&]+/', '', $_POST['email']);
  $subject = $_POST['subject'];

  $sent = mail($to_email, $subject, $message, "From: $from_email");
  
  if ($sent) {
  ?><html>
<head>
<title>Thank You</title>
</head>
<body>
<h1>Thank You</h1>
<p>Thank you for your message.</p>
</body>
</html>
<?php

} else {

?><html>
<head>
<title>Something went wrong</title>
</head>
<body>
<h1>Something went wrong</h1>
<p>We could not send your feedback. Please try again.</p>
</body>
</html>
<?php
}
?>
?>
