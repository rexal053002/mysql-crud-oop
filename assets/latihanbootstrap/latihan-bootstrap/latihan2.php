<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Latihan 2 bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="/assets/css/bootstrap.min.css" />
    <script src="main.js"></script>
</head>
<body>
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
          <a class="dropdown-item" href="#">kepo1</a>
          <a class="dropdown-item" href="#">kepo2</a>
          <a class="dropdown-item" href="#">kepo3</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

     <div class="container">
         <div class="col-md-12">
             <div class="card">
             <div class="card-header">FORMULIR PPDB SMK ASSALAAM
             <div class="card-body">

             <form action="" method="post">
                 <div class="form-group">
                           <label for="">Nama</label>
                           <input type="text" name="nama" class="form-control">
                    </div>
                <div class="form-group">
                           <label for="">Alamat</label>
                           <textarea name="alamat" rows="8">
                           </textarea>
                    </div>
                <div class="form-group">
                           <label for="">Jenis Kelamin</label>
                        <div class="radio">
                           <label><input type="radio" name="lk" >Laki-laki</label>
                        </div>
                        <div class="radio">
                           <label><input type="radio" name="pr" >Perempuan</label>
                        </div>  
                <div class="form-group">
                           <label for="">Asal Sekolah</label>
                           <input type="text" name="sklh" class="form-control">
                    </div>
                <div class="form-group">
                           <label for="">Nilai Bahasa Indonesia</label>
                           <input type="number" name="ni" class="form-control">
                    </div>
                <div class="form-group">
                           <label for="">Nilai Matematika</label>
                           <input type="number" name="mtk" class="form-control">
                    </div>
                <div class="form-group">
                           <label for="">IPA</label>
                           <input type="number" name="ipa" class="form-control">
                    </div>
                <div class="form-group">
                           <label for="">Bahasa Inggris</label>
                           <input type="number" name="ing" class="form-control">
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
                     $c = $_POST['jk'];
                     $d = $_POST['sklh'];
                     $e = $_POST['ni'];
                     $f = $_POST['mtk'];
                     $g = $_POST['ipa'];
                     $h = $_POST['ing'];
                     $i = ($e+$f+$g+$h)/4;
                }
             ?>

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
                     <th>No.</th>
                     <th>Nama</th>
                     <th>ALAMAT</th>
                     <th>JENIS KELAMIN</th>
                     <th>ASAL SEKOLAH</th>
                     <th>NILAI BAHASA INDONESIA</th>
                     <th>NILAI MATEMATIKA</th>
                     <th>NILAI IPA</th>
                     <th>NILAI BAHASA INGGRIS</th>
                     <th>RATA-RATA</th>
                     <th>KETERANGAN</th>
                 </tr>
                 <tr>
                     <th>1.</th>
                     <th><?php echo $a; ?></th>
                     <th><?php echo $b; ?></th>
                     <th><?php echo $c; ?></th>
                     <th><?php echo $d; ?></th>
                     <th><?php echo $e; ?></th>
                     <th><?php echo $f; ?></th>
                     <th><?php echo $g; ?></th>
                     <th><?php echo $h; ?></th>
                     <th><?php echo $i;?></th>
                     <th><?php 
                     if($i > 65){
                         echo "Anda diterima";
                     }else{
                         echo "Anda tidak diterima";
                     }
                     ?></th>
                 </tr>
            </table>
           </div>
      </div>  
</div>
    </div>
</div>

      <script src="/assets/js/jquery.min.js"></script>
      <script src="/assets/js/bootstrap.bundle.js"></script>
      <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>