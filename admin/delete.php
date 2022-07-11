<?php 	include 'db.php'; 
if(isset($_GET['id'])){
    $id = $_GET['id'];
	$sql="DELETE FROM tbl_product WHERE id = '$id'";
    $result = $conn->query($sql);

    // var_dump($id);
    header('Location: index.php');
    
}
// $conn->close(); 
?>