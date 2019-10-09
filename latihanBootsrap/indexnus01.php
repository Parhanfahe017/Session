

session_start();
if(isset($_SESSION['Login'])) {
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
      <a class="nav-item nav-link active" href=".php">latihan 1<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="">latihan 2</a>
      <a class="nav-item nav-link" href="#">Pricing</a>
      <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </div>
  </div>
</nav>


     <div class="container">
        <div class="row"style="padding:20px;">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h2>Formulir Data Diri<h2></div>
                        <div class="card-body">
                        
                           <form action="halnus02.php" method="post">
                              <div class="form-group">
                              <label for="">nama</label>
                            <input type="text" name="nama" class="form-control" required>                                                 
                            </div>
                            
                        <div class="form-group">
                        <label for="">alamat</label>
                        <textarea name="alamat" class="form-control"  rows="5" required></textarea>
                        </div>

    <div class="form-group">
    <label for="">Jenis Kelamin</label>
    <br>
    <input type="radio" name="jk" class="laki">Laki-laki</radio>
    <input type="radio" name="jk" class="name">Premuan</radio>
    </div>

        <div class="form-group">
        <label for="">Tanggal Pembelian</label>
        <input type="date" name="tanggal_beli" class="form-control" required>
        </div>

            <div class="form-group">
            <label for="">Jumlah buku</label>
            <input type="number" name="jumlah_buku" class="form-control" required>
            </div>
                        
                <div class="form-group">
                   <button type="submit" name="simpan" class="btn btn-primary">Simpan
                   </button>
                   <button type="reset" name="" class="btn btn-danger">Resert</button>
                   </div>

                 </form>
                
                             







                     <script src=/"asets/js/bootsrap.bundle.min.js"></script>
                             <script src=/"asets/js/bootsrap.bundle.js"></script>
                                <script src=/"asets/js/bootsrap.min.js"></script>

</body>
</html>

}else{
    header("Location: Login.php");
}