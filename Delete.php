<?php  
/** 
 * Created by PhpStorm. 
 * User: Ehtesham Mehmood 
 * Date: 11/24/2014 
 * Time: 11:55 PM 
 */  
include_once 'Db_connection.php';
    
//$delete_id=$_GET['del'];  


//$id = isset($_GET['id']) ? $_GET['id'] : '';

//$id="";


//$id = (isset($_POST['id']) ? $_POST['id'] : '');


$id = ''; 
if( isset( $_GET['id'])) {
    $id = $_GET['id']; 
} 


$delete_id="";




$delete_query="delete  from users WHERE id='$delete_id'";//delete query  
$run=mysqli_query($dbcon,$delete_query);  
if($run)  
{  
//javascript function to open in the same window   
    echo "<script>window.open('vu.php?deleted=user has been deleted','_self')</script>";  
}  

else
echo "Webmaster has delibrately disabled this function for security purposes";
  
?>




