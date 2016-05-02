<?php 

	// define page title
	define('TITLE', 'PHP FILE LISTING NAVIGATION');

	if (isset($_GET['car'])) {
		$contentPage = "./" . $_GET['car'];
	}

	// directory to scan
	$pagesDirectory = ".";

	// scan the directory
	$pages = scandir($pagesDirectory);

	// echo "<pre>";
	// print_r($pages);
	// echo "</pre>";

?>

<!DOCTYPE html>
<html>
<head>

	<!-- page title -->
	<title><?php echo TITLE; ?></title>

	<!-- global page styles -->
	<link rel="stylesheet" type="text/css" href="styles.css">

	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>

</head>
<body>

	<section class="header">
		<h1>TOP CARS OF 2015</h1>
	</section><!-- .header -->

	<section class="cars-nav">	
		<ul>
			<!-- navigation goes here -->
			<?php foreach ($pages as $pageName) {?>
				<?php if (strpos($pageName, '.car.php')): ?>
					<li><a href="?car=<?php echo $pageName; ?>"><?php echo substr($pageName, 0, -8); ?></a></li>	
				<?php endif ?>
			<?php } ?>
		</ul>
	</section><!-- .cars-nav -->
	 
	<!-- page content goes here -->
	<?php if (isset($_GET['car'])) {
		include($contentPage);
	} ?>


</body>
</html>