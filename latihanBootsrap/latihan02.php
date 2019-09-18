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

         <title>Hello, Latihan 2!</title>
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
      <a class="nav-item nav-link" href="#">latihan 2</a>
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
              <label for="">Jenis Kelamin</label>
               <br>
                  <input type="radio" name="laki" class="radio" value="laki">
                   laki-laki
                     <input type="radio" name="pre"class="radio" value="premuan">
                     Prempuan
                 </div>

                    <div class="form-group">
                            <label for="">Alamat</label>
                            <textarea name="alamat" class="form-control" rows="5"></textarea>
                            </div>

                <div class="form-group">
                   <label for="">Asal Sekolah</label>
                       <input type="text" name="asal" class="form-control">                                                 
                       </div>

         <div class="form-group">
             <label for="">Tanggal Lahir</label>
             <input type="text" name="lahir" class="form-control">                                                 
             </div>

                   <div class="form-group">
                        <label for="">Nilai Indosian</label>
                         <input type="number" name="indo" class="form-control">                                                 
                   </div>

                         <div class="form-group">
                             <label for="">Nilai MTK</label>
                             <input type="number" name="mtk" class="form-control">                                                 
                             </div>

     <div class="form-group">
         <label for="">Nilai IPA</label>
         <input type="number" name="ipa" class="form-control">                                                 
         </div>

            <div class="form-group">
                 <label for="">Nilai Inggris</label>
                 <input type="number" name="ris" class="form-control">                                                 
                </div>
                    

             <div class="form-group">
                      <button type="submit" name="simpan" class="btn btn-primary">Simpan
                      </button>
                       <button type="reset" name="" class="btn btn-danger">Resert</button>
                       <button type="logout" name=lagout class="btn btn-danger">Logout</button>
                     </div>
                     </form>

                 <?php
                 if(isset($_POST['simpan'])) {
                   $a = $_POST['nama'];
                   $b = $_POST['jenis'];
                   $c = $_POST['laki'];
                   $d = $_POST['pre'];
                   $e = $_POST['almat'];
                   $f = $_POST['asal'];
                   $g = $_POST['lahir'];
                   $nilai_1 = $_POST['indo'];
                   $nilai_2 = $_POST['mtk'];
                   $nilai_3 = $_POST['ipa'];
                   $nilai_4 = $_POST['ris'];
       $jumlah = $jumlah = $nilai_1+$nilai_2+$nilai_3+$nilai_4;
    $nilai_ratarata  = ($nilai_1+$nilai_2+$nilai_3+$nilai_4)/4;


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
                     <th>Jenis Kelamin</th>
                     <th>Alamat</th>
                     <th>Asal Sekolah</th>
                     <th>Tanggal Lahir</th>
                     <th>Nilai Indosia</th>
                     <th>Nilai MTK</th>
                     <th>Nilai Ipa</th>
                     <th>Nilai Inggris</th>
                     <th>Rata-Rata</th>
                     </tr>
                       <tr>
                       <th>I</th>
                       <th><?= $a; ?></th>
                       <th><?= $b; ?></th>
                       <th><?= $c; ?></th>
                       <th><?= $d; ?></th>
                       <th><?= $e; ?></th>
                       <th><?= $f; ?></th>
                       <th><?= $g; ?></th>
                       <th><?= $nilai_1; ?></th>
                       <th><?= $nilai_2; ?></th>
                       <th><?= $nilai_3; ?></th>
                       <th><?= $nilai_4; ?></th>
                       <th><?= $nilai_ratarata; ?></th>
                       </tr>
                   </table>
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
?>