<html>
<head>
<title>Enter Search Data</title>
<link rel = "stylesheet" type = "text/css" href = "style1.css"/>
</head>
<body>
<?php

session_start();

function show_info($data1, $data2)//function to dsiplay username or set cookie if new user
{
if (isset($_COOKIE["uname"]))
  {
   echo "<p align='center'>welcome back ".$_COOKIE['uname']."</p>";
  }
  else
  {
   setcookie("uname",$data2, time()+600, "/", false, 0);
   echo "<p>Hello you. This may be your first visit.</p>";
   }
}


function sel_veg ()
{

echo "<form method='POST' action='veg_result.php'>";
echo "<table border='2'  width = '45%' cellpadding='1' align='center'>";
echo "<th colspan='2'>";
echo "<h2 align='center'>Current Inventory</h2>";
echo "</th>";
echo "<tr>";
echo "<td><p>Enter a vegtable to check current inventory</td><td align='right' > <input type='text' name='veg_sel' /></p></td>";
echo "</tr>";
echo "<tfoot>";
echo "<tr>";
echo "<td align='right'><input type='reset' value='Reset' /></a></td>";
echo "<td><input type='submit' value='Submit' /></td>";
echo "</tfoot>";
echo "</table>";




}




//print_r($_COOKIE['uname']) ;
//echo "<p>".$data1."</p>";
//echo " ";
//echo "<p>".$data2."</p>";


$name1 = trim($_POST['user_name']);
$passw = trim($_POST['user_passwd']);
//$_SESSION['sess_name'] = $name1;
//$_SESSION['sess_passw'] = $passw;

if (!get_magic_quotes_gpc()) {


}

//create connection to database fredbiz
@ $db = mysqli_connect('localhost', 'Fred', 'Farmer#Fred', 'FredBiz');

if (mysqli_connect_errno()) {
echo ' Error: Could not connect to database. Please try again later.';
exit;
}
//query users table
$query =("SELECT * FROM Users");
$result = mysqli_query($db,$query);

$num_results = mysqli_num_rows($result);

$i=0;

while ($i<10)
{
$row = mysqli_fetch_assoc($result);

//test for matching user name and password
if ($row['username'] = $name1 && $row['password'] = $passw)
   {
    require('header.php');
    show_info($row['id'], $row['username']);
	echo "<br />";
	sel_veg();
	break;
   }

 else
    {

   echo "<p align='center'>Sorry you must register to access database</p>";
    echo "<p align='center'><a href= 'new_user.php'>Click here to register.</a></p>";
    echo "<p align='center'><a href= 'login page.php'>Click here to return to login page.</a></p>";
    break;
   }

$i++;
}


?>
</body>
</html>
