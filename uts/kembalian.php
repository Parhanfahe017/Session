<?php 
    if (isset($_POST['bayarrr'])) {
        $kemb = $_POST['kemb'];
        $uang = $_POST['uang'];
        $byr = $uang - $kemb;



        ?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta charset="utf-8">
             <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
             <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="/asets/css/bootsrap-min.css">
 
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
       <a class="navbar-brand" href="/">BOOK STORY</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
     </button>

  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href=""><span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href=""></a>
      <a class="nav-item nav-link" href=""></a>
      <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
    </div>
  </div>
</nav>

            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Document</title>
        </head>
        <body>
        
            <form action="">
                 <nav class="navbar navbar-expand-lg navbar-light bg-light">
       <a class="navbar-brand" href="/"></a>
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

                <div class = "container">
                    <div class = "card">
                        <div class = "card-header"> Data Berhasil di Input</div>
                        <div class = "card-body">
                       <b> <p> Kembalian anda : </p></b>
                            <h2>Rp. <?php echo $byr ?> </h2><br>
                            
                                
                                
                    
                                
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </body>
        </html>
   <?php }

?>
