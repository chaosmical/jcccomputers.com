<?php
Header('Location: /services.php');exit;
include_once $_SERVER['DOCUMENT_ROOT'] . '/common/includes/settings.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>JCC Computers - Backup Services</title>
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
				<li><a class="selected" href="services.php">Services</a></li>
				<li><a href="partners_vendors.php">Partners and Vendors</a></li>
				<li><a href="clients_testimonials.php">Clients and Testimonials</a></li>
				<li><a href="contactus.php">Contact Us</a></li>
			</ul>
			<div id="content">
				<style type="text/css">
table {
	width:100%;
}
.notes {
	font-size:86%;
	margin-top:30px;
}
th {
	background-color:black;
	color:white;
}
				</style>
				<img src="/common/images/backup_logo.png" alt="logo" style="float:right" />
				<h1>Backup Services</h1>
				<p>We are pleased to introduce Jer's Backup Solution.</p>
				<p>Can you imagine your life without all your images, photos, movies or music files? You are only one crash away from losing it all, unless you have a backup solution in place.</p>
				<p>Get the peace of mind you deserve with a solution you can trust. We offer different packages depending on the amount of storage desired:</p>
				<h2>Packages</h2>
				<table>
					<thead>
						<tr>
							<th width="75%">Package</th>
							<th width="25%">Fee</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>5 GB</td>
							<td>$15/month</td>
						</tr>
						<tr>
							<td>25 GB</td>
							<td>$25/month</td>
						</tr>
						<tr>
							<td>50 GB</td>
							<td>$50/month</td>
						</tr>
						<tr>
							<td>100 GB</td>
							<td>$75/month</td>
						</tr>
					</tbody>
				</table>
				<h2>Software and Additional Services and Support</h2>
				<table>
					<tbody>
						<tr>
							<th width="75%">Service</th>
							<th width="25%">Fee</th>
						</tr>
						<tr>
							<td>Backup Software (Windows/Mac/Linux) and License</td>
							<td>$25 per machine</td>
						</tr>
						<tr>
							<td>On Site Setup (optional) + 1 courtesy call</td>
							<td>$20 (one time fee)</td>
						</tr>
					</tbody>
				</table>
				<div class="notes">Notes:<br />
<ul>
<li>All fees subject to applicable taxes.</li>
<li>Each PC/Server is required a License fee <strong>(included in the backup package)</strong>. As well each PC/Server requires the software and support listed above.</li>
</ul>
</div>
				<div id="push"></div>
			</div>
		</div>
		<div id="footer">
			<div id="footer_content">
				<p>&copy;2010-<?=date('Y')?> JCC Computers</p>
			</div>
		</div>
	</body>
</html>
                    
                    