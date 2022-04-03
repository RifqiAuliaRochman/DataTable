<?php 
    include 'koneksi.php';

    error_reporting(0);

    session_start();
    
    if (isset($_SESSION['username'])){
        header("location: index.php");
    }
    if (isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $cpassword = md5($_POST['cpassword']);

        if ($password == $cpassword){
            $sql = "SELECT * FROM tbl_users WHERE email='email'";
            $result = mysqli_query($connection,$sql);
            if (!$result->num_rows > 0) {
                $sql = "INSERT INTO tbl_users (username, email, password) VALUES ('$username','$email', '$password')";
                $result = mysqli_query($connection,$sql);
                if ($result){
                    echo "Registrasi Berhasil";
                } else{
                    echo "ada kesalahan";
                }
            }else{
                echo "email sudah terdaftar";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
</head>
<body>
    <div class="alert alert-warning" role="alert">
        <?php echo $_SESSION['error'] ?>
    </div>

    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight:800;">Register</p>
        <div class="input-group mb-3">
            <input type="username" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
        </div>
        <div class="input-group mb-3">
            <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
        </div>
        <div class="input-group mb-3">
            <input type="password" placeholder="password" name="password" value="<?php echo $password; ?>" required>
        </div>
        <div class="input-group">
            <input type="password" placeholder="Confirm password" name="cpassword" value="<?php echo $cpassword; ?>" required>
        </div>
        <div class="input-group">
            <button name="submit" class="btn">Register</button>
        </div>
        <a href="login.php"><p class="login-register-text" >Login</p></a>
        </form>
    </div>
</body>
</html>