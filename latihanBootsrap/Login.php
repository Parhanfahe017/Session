<?php
session_start();
if (isset($_POST['Login'])) {
    $a = $_POST['user'];
    $b = $_POST['pass'];
    //periksa login
    if ($a == "abdul" && $b == "123") {
        //menciptakan session
        $_SESSION['login'] = $a;
        //menuju ke halaman pemeriksaan session
        echo "<h1>Anda berhasil LOGIN</h1>";
        echo "<h2>Klik <a href='latihan01.php'>di sini</a>
                untuk menuju ke halaman selanjutnya atau Klik
                <a href='latihan02.php'>";
    } else {
        die("username atau password anda salah 
        silahkan kembali login <a href=Login.php> Login </a>");
    }
} else {
        ?>
    <html>

    <head>
        <title>Login here...</title>
    </head>

    <body>
    
        <form action="" method="post">
            <h2>Login Here...</h2>
            Username : <input type="text" name="user"><br>
            Password : <input type="password" name="pass"><br>
            <input type="submit" name="Login" value="Log In">
        </form>
    </body>

    </html>
<?php
}
?>