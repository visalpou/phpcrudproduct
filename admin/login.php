<?php 
//     include 'db.php';
//     session_start();

//     if(empty($_POST['submit']) && empty($_POST['email']) && empty($_POST['password'])){
//         $email = $_POST['email'];
//         $password = $_POST['password'];

//         // md5 password
//         $password = md5($password);

//         $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
//         $res=$conn->query($sql);
//         if($res->num_rows > 0){
//             $_SESSION['email'] = $email;
//             header('location:index.php');
//     } 

// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form id="login-form" method="post">
                    <div class="form-group">
                        <input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="email"
                            value="">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" tabindex="2" class="form-control"
                            placeholder="Password">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                                <input type="submit" name="submit" id="login-submit" tabindex="4"
                                    class="form-control btn btn-login" value="Log In">
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>


</body>

</html>