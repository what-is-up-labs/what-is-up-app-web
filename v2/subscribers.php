<?php

// Make a MySQL Connection
mysql_connect("emilyduong.fatcowmysql.com", "whatisup", "JoeJoe") or die ("Error connecting to database"); //or die(mysql_error());
mysql_select_db("whatisup_subscribers") or die(mysql_error());

// Get all rows
$result = mysql_query("SELECT email, created_at FROM emails") or die ("Error saving to database"); //or die(mysql_error());  

$i = 0;
while($row = mysql_fetch_array($result))
  {
  $i++;
  echo $row['created_at']." ".$row['email'];
  echo "<br />";
  }

echo "<br /><strong>".$i." total signups</strong>";
?>