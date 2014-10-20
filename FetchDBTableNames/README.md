This is a demo to show how to fetch database tables names from database and display them as input dropdown/datalist.

Once the user clicks on the Show Tables button, the jquery script jquery.fetch.db.table.names.js is called, which calls the showtablelist.php file. The showtablelist.php files connects to the database, and using the database name, fetch all the table names and sends it as an array to the jquery.fetch.db.table.names.js file, which then displays the result as input dropdown/datalist inside the division with id result.
