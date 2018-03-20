
<?php
require_once'connect.php';
// Escape user inputs for security
$Email = mysqli_real_escape_string($link, $_REQUEST['Email']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);
//$password-repeat = mysqli_real_escape_string($link, $_REQUEST['password-repeat']);
 
// attempt insert query execution
$password=md5($password);
$sql = "INSERT INTO users (Email, password) VALUES ('$Email', '$password)";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>