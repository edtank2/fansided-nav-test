<?php $docroot = $_SERVER['DOCUMENT_ROOT']; ?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>FanSided Navigation Demo - NFL Page</title>
		<link rel="stylesheet" href="/css/styles.css">
	</head>
	<body>
        <div id="nav">
            <?php include ($docroot.'/nav.php'); ?>
        </div>
        <div id="nfl-nav">
            <?php include ($docroot.'/nfl-nav.php'); ?>
        </div>
        <p>nfl page content here</p>
	</body>
</html>