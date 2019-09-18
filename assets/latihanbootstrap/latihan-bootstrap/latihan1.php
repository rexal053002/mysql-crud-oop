<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Latihan 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="main.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" media="screen" href="/assets/css/bootstrap.min.css" />
    <!-- end CSS -->
</head>
<body>
      <!-- header -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">Assalaam</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="latihan1.php">Latihan 1<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="latihan2.php">Latihan 2</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">kepo1</a><!-- isi -->
      <!-- end isi -->
          <a class="dropdown-item" href="#">kepo2</a>
          <a class="dropdown-item" href="#">kepo3</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
      
      <!-- content -->
      <div class="container">
           <div class="col-md-12">
               <div class="card">
                  <div class="card-header">Formulir</div>
                  <div class="card-body">
                  <!-- isi -->
                  
                  <form action="" method="post">
                       <div class="form-group">
                           <label for="">Nama</label>
                           <input type="text" name="nama" class="form-control">
                       </div>
                       <div class="form-group">
                           <label for="">Alamat</label>
                           <textarea name="alamat" class="form-control" rows="5">
                           </textarea>
                       </div>
                       <div class="form-group">
                       <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                       <button type="reset" name="reset" class="btn btn-warning">Reset</button>
                       </div>
                  </form>
                  <?php
                      if(isset($_POST['simpan'])){
                            $a = $_POST['nama'];
                            $b = $_POST['alamat'];
                      }
                  ?>
                  <!-- end isi -->
                  </div>
            </div> 
      </div>    
      <div class="col-md-12" sytle="background:skyblue">
      <center>
      <h3>Hasil Formulir</h3>
      </center>
      <div class="table-responsive">
           <table class="table">
                 <tr>
                     <th>NOMOR</th>
                     <th>Nama</th>
                     <th>ALAMAT</th>
                 </tr>
                 <tr>
                     <th>1.</th>
                     <th><?php echo $a; ?></th>
                     <th><?php echo $b; ?></th>
                 </tr>
            </table>
           </div>
      </div>  
</div>    
      <!-- end content -->

      <!-- js -->
      <!-- Jquery pertama bebas,selanjutnya bebas juga -->
      <script src="/assets/js/jquery.min.js"></script>
      <script src="/assets/js/bootstrap.bundle.js"></script>
      <script src="/assets/js/bootstrap.bundle.min.js"></script>
      <!-- end js -->
</body>
</html>