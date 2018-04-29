<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>	
<body onload="getData()">
	<p>123132312</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<p id="123">
		<?php echo basename($_SERVER['SCRIPT_FILENAME']); ?>
	</p>
	<!-- <script>
		var form, input;
		form = document.createElement('form');
		form.action = '1.php';
		form.method = 'post';

		input = document.createElement('input');
		input.type = 'hidden';
		input.name = 'slug';
		input.value = basename($_SERVER['SCRIPT_FILENAME']);

		form.appendChild(input);
		document.getElementById('123').appendChild(form);
		form.submit();
	</script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script src="1.js"></script>
</body>
</html>