<!DOCTYPE html>
<html>
<head>
<base href="http://website.startmydesign.com/project/">
<title><?php if(isset($_GET['page'])) $page = $_GET['page']; else  $page = 'Home'; echo $page;?></title>

<!-- JavaScript --->
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<!-- CSS --->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="include/style.css" rel="stylesheet">
</head>

	<body>

<div class="container">
	<?php $c->menu(); ?>
</div>

