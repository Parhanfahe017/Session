


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
      <a class="nav-item nav-link active" href="latihan01.php">latihan 1<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="latihan02">latihan 2</a>
      <a class="nav-item nav-link" href="#">Pricing</a>
      <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </div>
  </div>
</nav>



     <div class="container">
        <div class="row"style="padding:20px;">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h2>BUKU<h2></div>
                        
                        <div class="card-body">

///hidden 
               <form action="hidden.php" method="post">
    <?php    
        if(isset($_POST['simpan'])) {
            $jml = $_POST['jumlah_buku'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $jk = $_POST['jk'];
            $tanggal_beli = $_POST['tanggal_beli'];
        for (a= 0; a < $tanggal_beli; a++) {?>
                   <div class="form-group">
                              <label for="">Judul Buku</label>
                            <input type="text" name="judul[]" class="form-control" requred>                                                 
                            </div>
                            
     <div class="form-group">
    <label for="">Kode Buku</label>                      
        <input type="text" class="form-control" name="kode[]" required></i>
                        </div>

         <div class="form-group">
            <label for="">penggarang</label>                      
            <select name="jenis_buku[]" class="form-control" required>
                <option value="horor">Horor</option>
                <option value="Fiksi">Fiksi</option>
                <option value="Romantis">romantis</option>
                <option value="">Dora</option>
                <option value=""></option>
                <option value=""></option>
        </select>
                        </div>


<div class="form-group">
    <label for="">Harga Buku</label>
    <input type="number" class="form-control" name="harga_buku[]" required>
    </div>
        <hr style="color">
        <?php } ?>
        <input type="hidden" name="nama" value="<?php echo $nama ?>">
        <input type="hidden" name="alamat" value="<?php echo $alamat ?>">
        <input type="hidden" name="jk" value="<?php echo $jk ?>">
        <input type="hidden" name="tanggal_beli" value="<?php echo $tanggal_beli ?>">
        <input type="hidden" name="jumlah_buku" value="<?php echo $jml ?>">
        
                <div class="form-group">
                   <button type="submit" name="simpan" class="btn btn-primary">Simpan
                   </button>
                   <button type="reset" name="" class="btn btn-danger">Resert</button>
                   </div>

                 </form>
        <?php } ?>
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
