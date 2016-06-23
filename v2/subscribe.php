<?php
$email = $_POST["email"];
$now = date("Y-m-d h:i:s");

// Validate email
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

// Make a MySQL Connection
mysql_connect("emilyduong.fatcowmysql.com", "whatisup", "JoeJoe") or die ("Error connecting to database"); //or die(mysql_error());
mysql_select_db("whatisup_subscribers") or die(mysql_error());

// Insert a row of information into the table emails
mysql_query("INSERT INTO emails (email, created_at) VALUES('$email','$now')") or die ("Error saving to database"); //or die(mysql_error());  

mysql_close();

echo "success";

} else {
	echo "Invalid email address.  Please double-check and try again.";
}

?>