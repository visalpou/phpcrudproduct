<?php
    $cn = new mysqli('localhost','root','','productcrud',3308);
    if(!$cn){
        echo("Connection failed: " . mysqli_connect_error());
    }
    if( isset($_POST['submit'])){
        $id = $_POST['id'];
        $name=$_POST['name'];
        $desc=$_POST['desc'];
        $price=$_POST['price'];
        $img=$_POST['img'];
        $sql = "INSERT INTO tbl_product VALUES ($id, '$name', '$desc', $price, 'test.jpg')"; 
        // var_dump($id);
        $cn->query($sql);
        header('location:index.php');
    }
?>