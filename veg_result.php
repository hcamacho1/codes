<html>
<head>
<title>Search result</title>
<link rel = "stylesheet" type = "text/css" href = "style1.css"/>
</head>
<body>
<?php
require('header.php');
function show_info($data1, $data2, $data3)//function to dsiplay username or set cookie if new user
{
echo "<table border='2'  width = '45%' cellpadding='1' align='center'>";
echo "<thead>";
echo "<td>Quantity</td><td>Vegetable</td><td>Weight(lb)</td>";
echo "</th>";
echo "<tr>";
echo "<td>".$data1."</td>";
echo "<td>".$data2."</td>";
echo "<td>".$data3."</td>";
echo "</tr>";

}
session_start();

$veg = trim($_POST['veg_sel']);
$_SESSION['sess_veg'] = $veg;

//function show_info($data1, $data2)//function to dsiplay username or set cookie if new user
//{
//  if (isset($_COOKIE["uname"]))
//   {
//    echo "<p align='center'>welcome back ".$_COOKIE['uname']."</p>";
//   }
//   else
//   {
//    setcookie("uname",$data2, time()+600, "/", false, 0);
//    echo "<p>Hello you. This may be your first visit.</p>";
//   }
// }

   //create connection to database fredbiz
   @ $db = mysqli_connect('localhost', 'Fred', 'Farmer#Fred', 'FredBiz');

   if (mysqli_connect_errno())
   {
   echo ' Error: Could not connect to database. Please try again later.';
   exit;
   }
   //query users table
   $result = mysqli_query($db, "SELECT * FROM Halloween");

   $num_results = mysqli_num_rows($result);

   $i=0;

  while ($i<9)
  {
    $row = mysqli_fetch_assoc($result);


	 if ($row['description'] == $_SESSION['sess_veg'])
	 {

	 show_info ($row['qty'], $row['description'],$row['weight']);
	 //break;

	 }
	 //else
	 //{
	 //echo "you did not enter a valid item name";
	 //}
	 $i++;
   }

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

echo "<p><a href='login page.php'>logout</a></p>";
echo "<p align='center'><a href= 'new_veg.php'>Click here to add a new vegetable.</a></p>";
?>

</body>
</html>