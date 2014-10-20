<html>
<head>
	<title>Fetch Table names from Database: PHP AJAX JQuery MySQL</title>
	<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
</head>
<body>
<h2>Fetch Table names from Database: PHP AJAX JQuery MySQL</h2>
<p>
	<h4>This is a demo to show how to fetch database tables names from database and display them as input dropdown/datalist.</h5>
</p>
<p>
	Once the user clicks on the button below, the jquery script <strong>jquery.fetch.db.table.names.js</strong> is called, 
	which calls the <strong>showtablelist.php</strong> file. The <strong>showtablelist.php</strong> files connects to the database, 
	and using the database name, fetch all the table names and sends it as an array to the <strong>jquery.fetch.db.table.names.js</strong> file, 
	which then displays the result as input dropdown/datalist inside the division with id <strong>result</strong>.		
</p>

<div>
	<button id="showtblbtn">Show Tables</button>
</div>

<div id="result"></div>
<script type="text/javascript" language="javascript" src="jquery.fetch.db.table.names.js"></script>
</body>
</html>
