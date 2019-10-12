<?php
session_start();
if(isset($_SESSION['login'])) {
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
             <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/asets/css/bootsrap-min.css">

         <title>Hello, Belajar Bootsrap!</title>
      </head>
    <body>

 
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
       <a class="navbar-brand" href="/">Parhan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
     </button>

  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="login.php">Login<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="proses02.php">Produk</a>
      <a class="nav-item nav-link" href="logout.php">Logout</a>
      <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </div>
  </div>
</nav>

      <div class="container">
        <div class="row" style="padding:20px">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><center>FORMULIR DATA DIRI</center></div>
                    <div class="card-body">
                    
                        <form action="proses01.php" method="POST">
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" class="form-control" name="nama" placeholder="Nama" required>
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <textarea name="ala" class="form-control" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jk"  value="Laki Laki">
                                    <label class="form-check-label">
                                        Laki Laki
                                     </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jk" value="Perempuan">
                                    <label class="form-check-label">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Pembelian</label>
                                <input type="date" name="tgl" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah Buku</label>
                                <input type="number" class="form-control" min="1" name="jumlah" required>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="proses">Proses</button>
                                <button class="btn btn-outline-danger my-2 my-sm-0" type="reset" name="reset">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
                              <script src=/"asets/js/bootsrap.bundle.min.js"></script>
                             <script src=/"asets/js/bootsrap.bundle.js"></script>
                                <script src=/"asets/js/bootsrap.min.js"></script>
		
</body>
</html>
<?php
}else{
    header("Location: login.php");
}   