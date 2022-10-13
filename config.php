<?php

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "student";

// //create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// //check connection
// if($conn->connect_error){
//     die("Connection failed: ". $conn->connect_error);
// }

?>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>