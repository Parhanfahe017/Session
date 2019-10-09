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
       <a class="navbar-brand" href="/"><b>Parhan<b></a><br>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
     </button>

  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="home.php">Home<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="produk.php">Produk</a>
      <a class="nav-item nav-link" href="#">Pricing</a>
      <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </div>
  </div>
</nav>

               <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="soalpro.php" method="POST">
                            <div class="form-group">
                                <input type="hidden" name="nm" value="<?php echo $nama; ?>">
                                <input type="hidden" name="al" value="<?php echo $alamat; ?>">
                                <input type="hidden" name="jk" value="<?php echo $jenke; ?>">
                                <input type="hidden" name="tgl" value="<?php echo $tanggal; ?>">
                                <input type="hidden" name="jml" value="<?php echo $jml; ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Judul Buku</label>
                                <input type="text" class="form-control" name="jb[]"
                                    placeholder="Judul Buku" required>
                            </div>
                            <div class="form-group">
                                <label for="">Kode Buku</label>
                                <input type="number" class="form-control" min="1" name="kb" required>
                            </div>
                            <div class="form-group">
                                <label for="">Pengarang</label>
                                <input type="text" class="form-control" name="peng" 
                                    placeholder="Pengarang" required>
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Buku</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Jenis Buku</label>
                                    </div>
                                    <select class="custom-select" id="inputGroupSelect01" name="jenis">
                                    <option selected>Pilihan</option>
                                    <option value="Novel">Novel</option>
                                    <option value="Fiksi">Fiksi</option>
                                    <option value="Horror">Horror</option>
                                    <option value="Cerita Bergambar">Cergam</option>
                                    <option value="Komik">Komik</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Harga Buku</label>
                                <input type="number" class="form-control" min="5000" name="harga" required> 
                            </div>
                        </form>
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