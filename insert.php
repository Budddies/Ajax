<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testing";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//insert

$qu = mysqli_query($conn, "select * form tbl_sample");

$que = mysqli_query($conn, $qu);
	
if(mysqli_num_rows($que) > 0){
	while($result = mysqli_fetch_array($que)){
		?>

		 <tr>
		 	<td> <?php echo $result['ID'] ?> </td>
		 	<td> <?php echo $result['first_name'] ?> </td>
		 	<td> <?php echo $result['last_name'] ?> </td>
		 </tr>

	<?php 
	}
}

?>