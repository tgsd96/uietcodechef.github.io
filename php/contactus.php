<?php
include("db_contact.php");
?>

<!DOCTYPE HTML>
<html>
<head>	
<script type="text/javascript" src="contactvalidate.js"></script>	
<link href="contactstylesheet.css" rel="stylesheet" type="text/css">
</head>
<div id="contact">
<form action="php/contactvalidate1.php" method="POST" name="regform" onsubmit="return validatedForm(this);">	
<table id="userinfo">
<tr><th>
</th><td>
<input type="text" placeholder="NAME*" name="username" size="40%" class="contactus">
</td></tr>
<tr><th>	
</th><td>
<input type="text" name="email" placeholder="EMAIL*" size="40%" class="contactus">
</td></tr>
<tr><th>	
</th><td>
<select name="branch">
<option  value="-1">Select Branch</option>	
<option  value="1">CSE</option>
<option  value="2">ECE</option>
<option  value="3">EEE</option>
<option  value="4">IT</option>
<option  value="5">MECHANICAL</option>
<option  value="6">BIOTECH</option>
</select>
</td></tr>
<tr><th>	
</th><td>
<select name="year">
<option value="-1">Select Year</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select>
</td></tr>
<tr><th>	
</th><td>
<textarea name='query' id='query' placeholder="QUERY*" rows='5' col='40'></textarea>
</td></tr>	
<tr><td>	
<input type="submit" name="submit" value="submit" class="submit">
</td></tr>
</form>
</table>
</div>
</body>
</html>
