$(document).ready(function(){
	$(document).on('click','#submit',function(e) {
	var first_name = $("#fname").val();
	var last_name = $("#lname").val();

	var data = $("#form").serialize();

		// displaydata();
		
		// function displaydata(){
			$.ajax({
				data: data,
				type: "POST",
				url: "ajaxsubmit.php",

				success: function(responsedata){
					 // console.log("Data Save: " + data);
					 $('#response').html(responsedata);
				}
			});
			// }			
		});
	return false;
});