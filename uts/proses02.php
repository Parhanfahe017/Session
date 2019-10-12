<?php
session_start();
if(isset($_SESSION['login'])) {
?>
<?php
    if (isset($_POST['byr'])) {
        $nama = $_POST['nm'];
        $alamat = $_POST['al'];
        $jk = $_POST['jk'];
        $tanggal = $_POST['tgl'];
        $jumlah = $_POST['jml'];
        $kode = $_POST['kb'];
        $pengarang = $_POST['peng'];
        $jns = $_POST['jenis'];
        $jdl = $_POST['jb'];
        $hrga = $_POST['harga'];

        $a = array_sum($hrga);
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
             <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hasil</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
        <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Assalaam</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="soal.php">Toko Buku<span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit" name="logout.php">Logout</button>
    </form>
  </div>
</nav>
    <!-- end Navbar -->

    <!-- content -->
    <form action="kembalian.php" method = "post">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="padding:20px">
                <div class="card">
                    <div class="card-header"><center>Assalaam Book Store</center></div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" style="align:center">
                                <tr align="center">
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th colspan="1">Jenis Kelamin</th>
                                    <th colspan="1">Jumlah</th>
                                    <th colspan="2">Tanggal Pembelian</th>
                                </tr>
                                <tr align="center">
                                    <td><?php echo $nama; ?></td>
                                    <td><?php echo $alamat; ?></td>
                                    <td><?php echo $jk; ?></td>
                                    <td><?php echo $jumlah; ?></td>
                                    <td colspan="2"><?php echo $tanggal; ?></td>
                                </tr>
                                <tr>
                                    <td align="center" colspan="6"><b>Daftar Buku Yang Dibeli</b></td>
                                </tr>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Judul</th>
                                    <th>Kode</th>
                                    <th>Pengarang</th>
                                    <th>Jenis Buku</th>
                                    <th>Harga (Rp)</th>
                                </tr>
                                <?php foreach ($jdl as $key => $value) {
                                 ?>
                                <tr>
                                    <td><?php echo $key+1; ?></td>
                                    <td><?php echo $jdl[$key]; ?></td>
                                    <td><?php echo $kode[$key]; ?></td>
                                    <td><?php echo $pengarang[$key]; ?></td>
                                    <td><?php echo $jns[$key]; ?></td>
                                    <td><?php echo $hrga[$key]; ?></td>
                                </tr>
                                <?php } ?>
                                <tr>
                                    <td align="center" colspan="6"><b>Total Pembayaran</b></td>
                                </tr>
                                <?php 
                                
                                    if ($a >= 500000) {
                                        $disc = $a*0.2;
                                    }elseif ($a >= 250000) {
                                        $disc = $a*0.1;
                                    }elseif ($a>=150000) {
                                        $disc = $a*0.05;
                                    } 
                                    else {
                                        $disc = $a-0;
                                    }
                                    $sub = $a-$disc;
                                    
                                ?>
                                <tr>
                                    <th>Sub Harga</th>
                                    <td align="right" colspan="5"><?php echo $a; ?></td>
                                </tr>
                                <tr>
                                    <th>Diskon</th>
                                    <td align="right" colspan="5"><?php echo $disc; ?></td>
                                </tr>
                                <tr>
                                    <th>Sub Total</th>
                                    <td align="right" colspan="5"><?php echo $sub; ?></td>
                                </tr>
                                <tr>
                                    <td align="center" colspan="6"><b>Pembayaran</b></td>
                                </tr>
                                <tr>
                                    <td colspan="6">
                                        <form action="" method="POST">
                                            <label for="">Masukkan Pembayaran</label>
                                            <input type="number" class="form-control" min ="<?php echo $sub; ?>" name = "uang" required><br>
                                            <input type="submit" class="btn btn-success form-control" name="bayarrr" value="Bayar">
                                            <td><input type="hidden" name = "kemb" value ="<?php echo $sub ?>"></td>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    <!-- end content -->

    <!-- JS -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <!-- End JS -->
</body>
</html>
    <?php } ?>


<?php
}else{
    header("Location: login.php");
}
?>