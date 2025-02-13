<?php
session_start();
include "connect.php";
$username = $_POST['username'];
$password = $_POST['password'];
if(!empty($_POST['submit_validate'])) {
    $query = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' && password = '$password'");
    $hasil = mysqli_fetch_array($query);
    if ($hasil) {
        $_SESSION['username_cafekita'] = $username;
        $_SESSION['level_cafekita'] = $hasil['level'];
        header('location:../home');
    } else { ?>
        <script>
            alert('Username atau password yang anda masukkan salah');
            window.location='../login'
        </script>
<?php
    }
}
?>