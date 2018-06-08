<!DOCTYPE html>
<html>
<head>
	<title>Mwalz School</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
	body{background-repeat: no-repeat;
		color: white;}
		li a{
			padding: 20px;
			border-radius: 3px;
			margin-top: 20px;
		}
</style>
</head>
<body style="background-image: url(jack.png) ;">
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
		<div class="navbar-header">
			<a href="" class="navbar-brand">Admissions</a>
		</div>
			<ul class="navbar-nav">
				<li class="active"><a href="#">Admissions</a></li>
				<li><a href="aboutus.php">AboutUs</a></li>
				<li><a href="grades.php">Grades</a></li>
				<li><a href="contactus.php">ContactUs</a></li>
				<li><a href="home.php">Home</a></li>
			</ul>
		</div>
	</nav><br>
	<h3>ADMISSION FORM</h3>
	<p>Please fill in this form with your details</p><br>
		<form>
			<fieldset>
				<label for="fname">First Name</label><br>
				<input type="text" name="firstname"
				placeholder="Enter name here" id="fname" required="">
				<br>
				<label for="sname">Surname</label><br>
				<input type="text" name="surname" placeholder="
				Enter Surname here" id="sname">
				<br>
				<input type="radio" name="gender" value="male" checked="">male <br>
				<input type="radio" name="gender" value="female">female <br>
				<input type="radio" name="gender" value="N/A">Prefer not to
				disclose
				<br>
				<label>DOB</label>
				<input id="date" type="date"><br>
				<label>Country</label>
				<br>
					<select>
						<option>Kenya</option>
						<option>Uganda</option>
						<option>Tanzania</option>
					</select>
					<input type="submit" name="submit"
					value="SUBMIT">
				</fieldset>
			</form>
			<p>	Upon filling this form please avail yourself for an interview within our intake periods;
			August,April and January</p>
</body>
</html>