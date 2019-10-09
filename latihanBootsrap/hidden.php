<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
             <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/asets/css/bootsrap-min.css">


<title>Kuy Belajar Tag Input Type Hidden</title> 
</head>

<body>
<h4>Kuy Belajar tag Input type="hidden"</h4>
           <form action="halnus02.php" method="post">
            <input type="hidden" name="asal_halaman" value="halaman_register"/>
            <input type="hidden" name="nmi" value="<? $a?>">
            <input type="hidden" name="mat" value="<? $b?>">
            <input type="hidden" name="klm" value="<? $c?>">
            <input type="hidden" name="tgal" value="<? $d?>">
            <input type="hidden" name="jum" value="<? $e?>">
 
 <div class="container">
        <div class="row"style="padding:20px;">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h2>Halaman2<h2></div>
                        <div class="card-body">


                              <label for="">Judul Buku</label>
                            <input type="text" name="judul" class="form-control">                                                 
                            </div> 
                            
     <div class="form-group">
    <label for="">Kode Buku</label>                      
        <select name="kode">
         <option value="simplemen">Simplemen</option>
         <option value="Sin">Sin</option>
         <option value="Conan">Conan</option>
         <option value="Dora">Dora</option>
         <option value="Dragon">Dragon</option>
         <option value="Naruto">Naruto</option>
        </select>
                        </div>

         <div class="form-group">
            <label for="">jenis Buku</label>                      
            <select name="jenis_buku">
            <option value="jenis" class="form-control">Jenis</option>
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
    <input type="number" class="form-control">
    </div>
        
                <div class="form-group">
                   <button type="submit" name="proses" class="btn btn-primary">Simpan
                   </button>
                   <button type="reset" name="" class="btn btn-danger">Resert</button>
                   </div>
            }
                 </form>
 
                </div>
                </div>
            </div>
        </div>

        <div class="row">
          <div class="col-md-12" style="background:blue">
          <center>
              <h2>Hasil Buku Yang di Pesan</h2>
          </center>
                 <div class="table-responsive">
                   <table class="table">
                     <tr>
                     <th>nomber</th>
                     <th>nama</th>
                     <th>alamat</th>
                     <th>Jenis Kelamin</th>
                     <th>tanggal</th>
                     <th>Jumlah Buku</th>
                     <th>Judul Buku</th>
                     <th>Kode Buku</th>
                     <th>Jenis Buku</th>
                     </tr>
                       <tr>
                       <th>I</th>
                       <th><?= $a; ?></th>
                       <th><?= $b; ?></th>
                       <th><?= $c; ?></th>
                       <th><?= $d; ?></th>
                       <th><?= $e; ?></th>
                       <th><?= $aa; ?></th>
                       <th><?= $bb; ?></th>
                       <th><?= $cc; ?></th>
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

