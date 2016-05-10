<html>
<head>
<title>Success!</title>
<link rel = "stylesheet" type = "text/css" href = "style1.css"/>
</head>
<body>
<?php
session_start();
$uname=$_POST['usr_name'];
$upswd=$_POST['usr_passwd'];
//create connection to database fredbiz
@ $db = mysqli_connect('localhost', 'Fred', 'Farmer#Fred', 'FredBiz');

if (mysqli_connect_errno()) {
echo ' Error: Could not connect to database. Please try again later.';
exit;
}

//query to insert new values into database
$query = "INSERT INTO Users Values (NULL,'$uname','$upswd')";
$result = mysqli_query($db, $query);


if ($result)
{
echo '<p>successful registration!</p>';
}
else
{
echo '<p>fail</p>';
}

echo "<p align='center'><a href= 'login page.php'>Click here to return to login page.</a></p>";

mysqli_close($db);
?>
</body>
</html>