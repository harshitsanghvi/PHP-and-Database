//	*****************************************
//	For fetching table name list
//	*****************************************
$("button#showtblbtn").click( function() {
	
	$.ajax({
      url: "showtablelist.php",
      type: "POST",
	  data:{action:'fetch'},
      success: function(data){
        	$("div#result").empty();
			$("div#result").html(data);
      }
   });
});
