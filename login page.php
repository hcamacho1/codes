<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Login page</title>
    <link rel = "stylesheet" type = "text/css" href = "style1.css"/>
    <meta http-equiv="Content-Type"
        content="text/html; charset=UTF-8" />



</head>

<body>
<?php
 require('header.php');

 ?>


<form method="POST" action="login_result.php">
<table border="3"  width = "20%" cellpadding="1" align="center">
<th colspan='2' align="center">
<h1>Please Login</h1>
</thead>
<tr>
<td align="left" cellpadding="35"><p>User Name</td><td align="right" > <input type="text" name="user_name" /></p></td>
</tr>
<tr>
<td align="left"><p>Password</td><td align="right"> <input type="text" name="user_passwd"  /></p></td>
</tr>
<tfoot>
<tr>
<td align="left"><a href="new_user.php">New user Click Here</a></td>
<td><input type="submit" value="Login" /></td>
</tfoot>
</table>


</body>
</html>
