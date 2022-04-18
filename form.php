<html>
<body>
<center>
<h1>
Product Barcode Generating
</h1>
<form action="form.php">
	<input type="" name="bar_code" placeholder="Enter Barcode Data"><br>
	<br>
	<input type="submit" value="Create Barcode">
</form>

<?php
	if(isset($_GET['bar_code'])){
		$bar_code=$_GET['bar_code'];
		include 'barcode128.php';
		echo bar128($bar_code);
	}	
?>

</center>
</body>
</html>