<?php
	
	/*	Make connection to the database
	**	@param:	localhost - name of the server
	**			username - username of your database. Default is root
	**			password - password of your database. Default is blank('') or root.
	*/
	$conn = mysql_connect('localhost', 'root', '');
  $dbname = "yourDBName";
	$db = mysql_select_db($dbname);
	
	// SQL Query to fetch table names
	$sql = "SHOW TABLES FROM ".$dbname."";
	
	// Executing the SQL query and string the result in $res
	$res = mysql_query($sql);
	
	// If something goes wrong, get the exact problem detail
	if($res === FALSE) {
    	die(mysql_error()); // Better error handling
	}
	
	echo "Select the database table: "
?>
<input list="dbtables" id="tblname" value="Select">
	<datalist id="dbtables">
	<?php while($row = mysql_fetch_array($res)){ ?>
		<option id="tblnames" name="tblname" value="<?php echo $row[0] ?>">
	<?php } ?>
	</datalist>
