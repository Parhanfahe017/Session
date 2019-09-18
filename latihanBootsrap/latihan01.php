<?php
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
                    <div class="card-header"><h2>Formulir<h2></div>
                        <div class="card-body">
                           <form action="" method="post">
                              <div class="form-group">
                              <label for="">nama</label>
                            <input type="text" name="nama" class="form-control">                                                 
                            </div>
                            
                        <div class="form-group">
                        <label for="">alamat</label>
                        <textarea name="alamat" class="form-control"  rows="5"></textarea>
                        </div>
                        
                <div class="form-group">
                   <button type="submit" name="simpan" class="btn btn-primary">Simpan
                   </button>
                   <button type="reset" name="" class="btn btn-danger">Resert</button>
                   </div>

                 </form>
                 <?php
                 if(isset($_POST['simpan'])) {
                   $a = $_POST['nama'];
                   $b = $_POST['alamat'];
                 }
                 ?>
                </div>
                </div>
            </div>
        </div>

        <div class="row">
          <div class="col-md-12" style="background:blue">
          <center>
              <h2>Hasil Formulir</h2>
          </center>
                 <div class="table-responsive">
                   <table class="table">
                     <tr>
                     <th>nomber</th>
                     <th>nama</th>
                     <th>alamat</th>
                     </tr>
                       <tr>
                       <th>I</th>
                       <th><?= $a; ?></th>
                       <th><?= $b; ?></th>
                       </tr>
                   </table>
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
    header("Location: Login.php");
}