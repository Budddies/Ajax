<!DOCTYPE html>
<html>
	<head>
		<title>Submit Form Using AJAX and jQuery</title>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<script src="script.js"></script>
		<link href="style.css" rel="stylesheet">
	</head>
	<body>
		<div id="mainform">
			<form id="form" method="post">
				
				<div>
					<input id="fname" name="first_name" type="text">
					<input id="lname" name="last_name" type="text">
					
					<input id="submit" type="button" value="Submit">
				</div>
			</form>
		</div>

		<div class="container">
			<!-- 	<button id="displaydata" class="btn btn-danger">Show Data</button> -->
				<table class="table table-bordered">
					<thead>
						<!-- <th>ID</th> -->
						<th>First Name</th>
						<th>Last Name</th>
					</thead>

					<tbody id="response">
						
					</tbody>
				</table>
			
		</div>
	</body>
</html>