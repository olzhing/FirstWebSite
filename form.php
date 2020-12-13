<?php
$username = filter_input(INPUT_POST, 'username');

if (!empty($username)){

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "uni";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO account (number)
values ('$username')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Number should not be empty";
die();
}

?>

<a href = "Main.html">Go home, dude</a>