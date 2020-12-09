<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="http://bootswatch.com/flatly/bootstrap.min.css">
	<link href="style/narrow-jumbotron.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<title>JobLister</title>
</head>
<body style="background-color: #8EC5FC;
background-image: linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);">
	<div class="container">
		<div class="header clearfix">
			<nav>
				<ul class="nav nav-pills pull-right" style="float:right; padding-right:10px;">
					<li role="presentation" style="padding-right:15px;"><a href="index.php" style="color:grey;">Home</a></li>
					<li role="presentation"><a href="create.php" style="color:grey;">Create Listing</a></li>      
	            </ul>
	        </nav>
	        <h3 class="text-muted"><?php echo SITE_TITLE; ?></h3>
	    </div>
	    <?php displayMessage(); ?>
