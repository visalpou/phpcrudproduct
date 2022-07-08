<?php
    require_once './uploadimg.php';
    $cn = new mysqli('localhost','root','','productcrud',3308);
    if(!$cn){
        echo("Connection failed");
    }

    if( isset($_POST['submit']) || isset($_FILES['img']) ){
        $id = $_POST['id'];
        $name=$_POST['name'];
        $desc=$_POST['desc'];
        $price=$_POST['price'];
        $img= uploadimg($_FILES['img']);
        // print_r($img);
        $sql = "INSERT INTO tbl_product VALUES ($id, '$name', '$desc', $price, '$img')"; 
        $cn->query($sql);
        header('location:index.php');
    }
?>