<!DOCTYPE html>
<html>
<head>
	<title>Mwalz School</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
		li a{
			padding: 20px;
			border-radius: 3px;
			margin-top: 20px;
		}
</style>
</head>
<body style="background-image: url(school.jpeg) ;">
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
		<div class="navbar-header">
			<a href="" class="navbar-brand">Students Perfomance</a>
		</div>
			<ul class="navbar-nav">
				<li class="active"><a href="#">Grades</a></li>
				<li><a href="aboutus.php">AboutUs</a></li>
				<li><a href="admissions.php">Admissions</a></li>
				<li><a href="contactus.php">ContactUs</a></li>
				<li><a href="home.php">Home</a></li>
			</ul>
		</div>
	</nav><br>
<div class="container-fluid">
		<div class="jumbotron" >
		<header style="font-family: cursive;">Mwalz School</header>
	    <h4 style="font-family: cursive;">Grades collection system</h4>
	    <p style="font-family: monospace;">Fill in the grades in the respective spaces.</p>
	   <form action="school.php" method="Post">
	   Name;<input type="text" name="name"><br>
	   Mathematics <br>
	   <input type="number" name="maths" required="" maxlength="3"><br>
	   Physics <br>
	   <input type="text" name="phyc" required="" maxlength="3"><br>
	   Biology <br>
	   <input type="text" name="Bio" required="" maxlength="3"><br>
	   Art & Crafts <br>
	   <input type="text" name="Art" required="" maxlength="3"><br>
	   Geography <br>
	   <input type="text" name="Geo" required="" maxlength="3"><br>
	   English <br>
	   <input type="text" name="Eng" required="" maxlength="3"><br>
	   Kiswahili <br>
	   <input type="text" name="Kis" required="" maxlength="3"><br>
	   Cre <br>
	   <input type="text" name="Cre" required="" maxlength="3"><br>
	   <br>
	   <input type="submit" >
	   </form>



</body>
</html>