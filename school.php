Welcome; <?php echo $_POST["name"]; ?><br>
<?php
$maths=0;
$Eng=0;
$Kis=0;
$Geo=0;
$Bio=0;
$phyc=0;
$Art=0;
$Cre=0;
$maths=$_POST["maths"];
$Eng=$_POST["Eng"];
$Geo=$_POST["Geo"];
$Cre=$_POST["Cre"];
$Bio=$_POST["Bio"];
$Kis=$_POST["Kis"];
$Art=$_POST["Art"];
$phyc=$_POST["phyc"];
	echo "<br>";
	echo "<h3><u>RESULTS</u></h3>";
	$sum = $maths+$Eng +$Geo +$Art +$Kis +$Cre +$phyc +$Bio;
$average=($maths+$Eng +$Geo +$Art +$Kis +$Cre +$phyc +$Bio)/8;
echo "<br>";
echo "Students average marks is" .$average;
echo "<br>";
if($average>80){
	#code...
	echo "Grade A";
}
elseif($average>70){
	#code...
	echo "Grade B";
}
elseif($average>60){
	#code...
	echo "Grade C";
}
elseif($average>50){
	#code...
	echo "Grade D";
}
elseif($average>40){
	#code...
	echo "Grade E";
}
$total=($maths+$Eng +$Geo +$Art +$Kis +$Cre +$phyc +$Bio);
echo "<br>";
echo "Students total marks is" .$total;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
	<style type="text/css">
		body{background-color: grey;}
	table,th,td{
		background-color: grey;
		color:white;
		border: 2px solid black;
		padding: 3px;
	}
	</style>
</head>
<body>
	"<table> 
	<tr>
		<th>Name</th>
		<th>Marks</th>
		</tr>
	<tr>
			<td>Maths</td>
			<td><?php echo "$maths";?></td>
	</tr>
	<tr>
			<td>English</td>
			<td><?php echo "$Eng";?></td>
	</tr>
	<tr>
			<td>Cre</td>
			<td><?php echo "$Cre";?></td>
	</tr>
	<tr>
			<td>Geography</td>
			<td><?php echo "$Geo";?></td>
	</tr>
	<tr>
			<td>Kiswahili</td>
			<td><?php echo "$Kis";?></td>
	</tr>
	<tr>
			<td>Biology</td>
			<td><?php echo "$Bio";?></td>
	</tr>
	<tr>
			<td>Physics</td>
			<td><?php echo "$phyc";?></td>
	</tr>
	<tr>
			<td>Art & Crafts</td>
			<td><?php echo "$Art";?></td>
	</tr>
	<tr>
			<td>TOTAL SUM</td>
			<td><?php echo "$sum";?></td>
	</tr>
    </table>";
</body>
</html>
