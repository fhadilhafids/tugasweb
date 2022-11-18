<?php 
    session_start();
    include 'functions.php';
    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' and password='$password'");
    $data1 = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username' and password='$password'");
    $cek = mysqli_num_rows($data);
    $cek1 = mysqli_num_rows($data1);
    if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['akses'] = "login";
        header("location:user/index.php");
    }
    else if($cek1 > 0){
        $_SESSION['username'] = $username;
        $_SESSION['akses'] = "login";
        header("location:admin/data_login/admin.php");
    }
    else{
        echo "<script>
            alert('Username / Password Salah');
            window.location.href='index.php';
        </script>
        ";
    }
?>

