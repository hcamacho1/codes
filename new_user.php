<html>
<head>
<title>New User Registration</title>
<link rel = "stylesheet" type = "text/css" href = "style1.css"/>
</head>
<body>
<?php
require('header.php');
echo "<form method='POST' action='new_user_success.php'>";
echo "<table border='2'  width = '45%' cellpadding='1' align='center'>";
echo "<th colspan='2'>";
echo "<h2 align='center'>Register New User</h2>";
echo "</th>";
echo "<tr>";
echo "<td><p>Enter User Name</td><td align='right' > <input type='text' name='usr_name' /></p></td>";
echo "</tr>";
echo "<tr>";
echo "<td><p>Enter Password</td><td align='right' > <input type='text' name='usr_passwd' /></p></td>";
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