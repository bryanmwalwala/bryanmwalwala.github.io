<!DOCTYPE html>
<html>
<head>
	<title>Hospital Management</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url(patient.jpeg);">
	<div class="container-fluid">
		<div class="jumbotron" >
		<header>Mwalz Hospital</header>
	    <h4 style="font-family: cursive;">Patient upkeep system</h4>
	    <p style="font-family: monospace;">Welcome to Mwalz online patient care system .Please fill in the form
	    below and you shall be attended to.</p>
	<form action="doctor.php" method="post">
	Name:<input type="text" name="name" ><br>
	ID:<input type="number" name="ID"><br>
	Pastillnesses:<textarea name="illnesses" rows="5" cols="40" value=""></textarea><br>
	Symptoms:<textarea name="symptoms" rows="5" cols="40" value="" placeholder="write your
	Symptoms here."></textarea><br>
	<input type="submit">
	</form>

</body>
</html>