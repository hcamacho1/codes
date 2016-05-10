<html>
<head>
<title>Success!</title>
<link rel = "stylesheet" type = "text/css" href = "style1.css"/>
</head>
<body>
<?php
session_start();
$vqty=$_POST['veg_qty'];
$vname=$_POST['veg_name'];
$vweight=$_POST['veg_weight'];

//create connection to database fredbiz
@ $db = mysqli_connect('localhost', 'Fred', 'Farmer#Fred', 'FredBiz');

if (mysqli_connect_errno()) {
echo ' Error: Could not connect to database. Please try again later.';
exit;
}

//query to insert new values into database
$query = "INSERT INTO Halloween Values (NULL,'$vqty','$vname','$vweight')";
$result = mysqli_query($db, $query);


if ($result)
{
echo '<p>vegetable entered into database</p>';
}
else
{
echo '<p>fail</p>';
}

echo "<p align='center'><a href= 'veg_result.php'>Click here to return inventory search page.</a></p>";

mysqli_close($db);
?>
</body>
</html>