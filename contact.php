<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/common/includes/settings.php';

function f_emailsyntax_is_valid($email) {
  list($local, $domain) = explode("@", $email);

  $pattern_local = '^([0-9a-z]*([-|_]?[0-9a-z]+)*)(([-|_]?)\.([-|_]?)[0-9a-z]*([-|_]?[0-9a-z]+)+)*([-|_]?)$';
  $pattern_domain = '^([0-9a-z]+([-]?[0-9a-z]+)*)(([-]?)\.([-]?)[0-9a-z]*([-]?[0-9a-z]+)+)*\.[a-z]{2,4}$';

  $match_local = eregi($pattern_local, $local);
  $match_domain = eregi($pattern_domain, $domain);
	
  if ($match_local && $match_domain) {
    return 1;
  } else {
    return 0;
  }
}

if ($_POST['function'] == 'process') {
  if (!f_emailsyntax_is_valid($_POST['email'])) {
    echo 'Invalid email address.'; exit;
  }
  $email_to = 'jerry@jcccomputers.com,design@jcccomputers.com';
  mail($email_to, strip_tags($_POST['subject']), strip_tags($_POST['message']), "From: ".strip_tags($_POST['name'])." <".strip_tags($_POST['email']).">\r\nMessage-id: <".time()."@jcccomputers.com>\r\n");
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>JCC Computers - Contact Us</title>
		<link rel="shortcut icon" href="/common/images/favicon.ico" type="image/x-icon" />
		<link rel="icon" href="/common/images/favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/combo?3.2.0/build/cssreset/reset-min.css&amp;3.2.0/build/cssfonts/fonts-min.css" />
		<link rel="stylesheet" type="text/css" href="/common/stylesheet/main.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="/common/stylesheet/print.css" media="print" />
<script type="text/javascript">
<!--
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19926513-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
-->
</script>
	</head>
	<body class="yui3-skin-sam yui-skin-sam subpage">
		<div id="container">
			<div id="header">
<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/common/includes/header.php';
?>
			</div>
			<ul id="nav">
				<li><a href="/">Home</a></li>
				<li><a href="about_us.php">About Us</a></li>
				<li><a href="products.php">Products</a></li>
				<li><a href="services.php">Services</a></li>
				<li><a href="partners_vendors.php">Partners and Vendors</a></li>
				<li><a href="clients_testimonials.php">Clients and Testimonials</a></li>
				<li><a class="selected" href="contactus.php">Contact Us</a></li>
			</ul>
			<div id="content">
				<h2>Contact Form</h2>
<?php
if ($_POST['function'] == 'process') {
?>
				<p>Email sent! Thank you.</p>
<?php
}
else {
?>
			<p>For more information on our services, or to book an appointment, send us an email using the form below, or give us a call at 306-222-9730.</p>
			<form name="contact_form" action="contact.php" method="post">
				<table>
					<tr>
						<td><label for="msg_from">Name:</label></td>
						<td><input name="name" id="msg_from" type="text" size="30" maxlength="40" required /></td>
					</tr>
					<tr>
						<td><label for="msg_email">E-mail:</label></td>
						<td><input name="email" id="msg_email" type="text" size="30" maxlength="40" required /></td>
					</tr>
					<tr>
						<td><label for="msg_subject">Subject:</label></td>
						<td><input name="subject" id="msg_subject" type="text" size="40" maxlength="60" required /></td>
					</tr>
					<tr>
						<td><label for="msg">Message:</label></td>
						<td><textarea name="message" id="msg" rows="6" cols="40" required></textarea></td>
					</tr>
				</table>
				<input type="hidden" name="function" value="process" />
				<input type="submit" name="submit" value="Send" />
			</form>
<?php
}
?>
				<div id="push"></div>
			</div>
		</div>
		<div id="footer">
			<div id="footer_content">
				<p><a href="contactus.php">Contact Us</a> | &copy;2010-<?=date('Y')?> JCC Computers</p>
			</div>
		</div>
	</body>
</html>
                    
                    
                    
                    
                    