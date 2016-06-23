<?php


if ($_POST['user']=="admin" && $_POST['pass']="targle") {
	// Make a MySQL Connection
	mysql_connect("localhost", "root", "notroot") or die ("Error connecting to database"); //or die(mysql_error());
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
} else {
?>
	<form method="post" action="">
		<input type="text" name="user" />
		<input type="password" name="pass" />
		<input type="submit" />
	</form>
<?php
}
?>

<!-- player container-->
<script type="text/javascript" src="flowplayer-2/flowplayer-3.2.8.min.js"></script>
<a href="http://www.mattgrasser.com/whatisup/What-Is-Up_NYC_Legal.flv" class="player" style="display:block;width:640px;height:480px;margin:0 auto" id="player"></a>
</div>
<script type="text/javascript">
flowplayer("player", "http://releases.flowplayer.org/swf/flowplayer-3.2.8.swf", {
    clip: {
        // these two configuration variables does the trick
        autoPlay: true,
        autoBuffering: true
    },
    onLoad: function() { // called when player has finished loading
        this.setVolume(100); // set volume property
    }
});
</script>