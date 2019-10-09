<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>soal 2</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>

</head>
<body>
    <center>From array</center>
    <fieldset>
    <legend>from array</legend>
       <form action="" method="post">
       <label for="">masukan jumlah</label>
      <input type="number" name="jml" min="1" required>
      <br>
      <input type="submit" name="submit" value="simpan">
      </form>

      <?php
      if (isset($_POST['submit'])) {
          $jml = $_POST['jml'];
          for ($i=0; $i <$jml; $i++) { ?>
          <label for=> masukan bilangan </label>
          <input type="text" name="bil[]" required>
          <label for=>Masukan pangkat</label>
          <input type="text" name="pangkat[]" required>
          <br>
          <br>

          <?php } ?>
          <input type="sumbit" value="sbm" name="sim">
          <input type="reset" value="reset">
      
    <?php }
    ?>
 </fieldset>
</body>
</html>