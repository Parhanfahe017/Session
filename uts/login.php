<?php
session_start();
if (isset($_POST['login'])) {
    $a = $_POST['user'];
    $b = $_POST['pass'];
    //periksa login
    if ($a == "abdul" && $b == "123") {
        //menciptakan session
        $_SESSION['login'] = $a;
        //menuju ke halaman pemeriksaan session
        echo "<h1>Selamat Datang abdul! anda berhasil Login</h1>";
        echo "<h2>Klik <a href='datadiri.php'>di sini</a>
                untuk menuju ke halaman selanjutnya ";
     } else {
        die("username atau password anda salah 
        silahkan kembali login <a href=login.php> Login </a>");
    }
} else {
        ?>
    <html>

    <head>
    <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
             <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Login here...</title>
    </head>

    <body>
    
        <form action="" method="post">
         <div class="container">
        <div class="row"style="padding:20px;">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h2>Login here...<h2></div>
                        <div class="card-body">
            Username : <input type="text" name="user"><br>
            Password : <input type="password" name="pass"><br>
            <input type="submit" name="login" value="Log In">
        </form>
    </body>

    </html>
<?php
}
?>