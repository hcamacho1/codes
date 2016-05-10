<html>
<head>
<title>Add new vegetable</title>
<link rel = "stylesheet" type = "text/css" href = "style1.css"/>
</head>
<body>
<?php
require('header.php');
echo "<form method='POST' action='new_veg_success.php'>";
echo "<table border='2'  width = '45%' cellpadding='1' align='center'>";
echo "<th colspan='2'>";
echo "<h2 align='center'>New Vegetable</h2>";
echo "</th>";
echo "<tr>";
echo "<td><p>Enter Quantity</td><td align='right' > <input type='text' name='veg_qty' /></p></td>";
echo "</tr>";
echo "<tr>";
echo "<td><p>Enter Name</td><td align='right' > <input type='text' name='veg_name' /></p></td>";
echo "</tr>";
echo "<tr>";
echo "<td><p>Enter Weight</td><td align='right' > <input type='text' name='veg_weight' /></p></td>";
echo "</tr>";
echo "<tfoot>";
echo "<tr>";
echo "<td align='right'><input type='reset' value='Reset' /></a></td>";
echo "<td><input type='submit' value='Submit' /></td>";
echo "</tfoot>";
echo "</table>";

?>
</body>
</html>