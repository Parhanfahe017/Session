<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
             <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/asets/css/bootsrap-min.css">

    <title>Document</title>
</head>
<body>

    <div class="table-responsive">
    <center><label><b><h3> DAFTAR PEMBELIAN BAJU</h3></label></center></div>
    <table class="table"></table>
    <tr>
        <th>Nama Pembeli</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Tanggal Pembelian</th>
        <th>Jumlah Beli</th>
    </tr>
    <tr>
        <td><?php echo $nama; ?></td>
        <td><?php echo $alamat; ?></td>
        <td><?php echo $jk ?></td>
        <td><?php echo $tanggal_beli; ?></td>
        <td><?php echo $jumlah_barang; ?></td>
    </tr>
    </table><br>

    <center><label><b><h3> DAFTAR BAJU YANG DIBELI </h3></label></center>
    <table class="table">
    <tr>
        <th>NAMA BARANG</th>
        <th>KODE BARANG</th>
        <th>JENIS BARANG</th>
        <th>HARGA BARANG</th>
        <th>JUMLAH BARANG</th>
        <th></th>
    </tr>
    </table>


                       <script src=/"asets/js/bootsrap.bundle.min.js"></script>
                             <script src=/"asets/js/bootsrap.bundle.js"></script>
                                <script src=/"asets/js/bootsrap.min.js"></script>
		
</body>
</html> 