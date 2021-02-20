<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<div>hello</div>
		<?php 
		 $mydir = 'uploads/'; 
		 $myfiles = array_diff(scandir($mydir), array('.', '..')); 
		foreach ($myfiles as $key => $value) {
			echo '<img src="/uploads/'.$value.'"  style="width:100%;">';
		 };
 ?>

</body>
</html>

