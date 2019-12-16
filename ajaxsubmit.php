<?php
// $conn = mysql_connect("localhost", "root", "");
// $db =  mysql_select_db("testing");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testing";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
// die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";


$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];

$query = mysqli_query($conn, "INSERT INTO tbl_sample(first_name, last_name) VALUES ('$first_name', '$last_name')");
// echo $query;
echo "Form Submitted Succesfully";



//insert

$qu = mysqli_query($conn, "select * form tbl_sample");

// $que =  mysqli_query($qu);
	
if(mysqli_num_rows($qu) > 1){
	while($result = mysqli_fetch_array($qu)){
		?>
		 <tr>
		 	<td> <?php echo $result['ID'] ?> </td>
		 	<td> <?php echo $result['first_name'] ?> </td>
		 	<td> <?php echo $result['last_name'] ?> </td>
		 </tr>

	<?php 
	}
}

mysqli_close($conn); 

?>
