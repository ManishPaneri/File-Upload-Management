<?php
require("constants.php");

	// Create a database connection
	$connection = @mysql_connect(DB_SERVER,DB_USER,DB_PASS);
	if (!$connection) {
		die("database connection failed: " . mysql_error());
	}
	// Select a database to use
	$db_select = mysql_select_db(DB_NAME,$connection);
	if (!$db_select) {
		die("database selection failed: " . mysql_error());
	}
	?>
