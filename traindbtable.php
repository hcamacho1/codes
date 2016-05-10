<html>
<head>
<title> Homer Camacho Homework assignment 1 </title>
</head>
<body>
<?php
//create connection to database
@ $db = new mysqli('localhost', 'root', '', 'trainroster');

//generate error message if unable to connect to database
 if (mysqli_connect_errno())
	{
	echo 'error: Could not connect to database.';
	exit;
	}
//select table to query
$query =  'SELECT * FROM trains';


//query trains table
$res1 = $db->query($query);


//var_dump();
//echo $result;


$num_results = $res1->num_rows;
//echo $num_results;

$i=0;

echo "<table border='1' width='40%'>";
echo "<thead>";
echo "<tr>";
echo "<th>Unit #</th>";
echo "<th>Notes </th>";
echo "<th>Model </th>";
echo "<th>Serial #</th>";
echo "<th># of pictures </th>";
echo "</tr>";
echo "</thead>";
while($i < $num_results )
	{
	$row = $res1->fetch_assoc();
	//var_dump($row);
	echo "<tr >";
	echo "<td>";
	echo $row['Unit'];
	echo "</td>";
	echo "<td>";
	echo $row['Notes'];
	echo "</td>";
	echo "<td>";
	echo $row['Model'];
	echo "</td>";
	echo "<td>";
	echo $row['Serial'];
	echo "</td>";
	echo "<td>";
	echo $row['Pictures'];
	echo "</td>";
	//echo "<br />";
	echo "</tr>";
	$i++;
	
	}
	
	echo "</table>";
?>


</body>
</html>