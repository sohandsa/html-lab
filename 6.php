<html>
	<head>
		<title>Visitor count</title>
		<style type ="text/css">
			h1, h2 {
				text-align: center;
			}
		</style>
	</head>
	<body>
		<h1>Welcome to my webpage </h1>
		<?php
			$file = "count.txt";
			$handle = fopen($file, 'r') or die("Cannot open file $file");
			$count = fread($handle, 10);
			$count++;
			echo "<h2> No. of people who visited this site $count</h2>";
			$handle = fopen($file, 'w') or die("Cannot open file $file");
			fwrite($handle, $count);
			fclose($handle);
		?>
	</body>
</html>