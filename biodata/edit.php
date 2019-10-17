<?php 
    include 'databasedata.php';
    $biodata = new Biodata();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Biodata Page</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
</head>
<body>
<?php 
    foreach($biodata->edit($_GET['id']) as $data)
    {
        $nama = $data['nama'];
        $almt = $data['alamat'];
        $tgl = $data['tgl_lahir'];
        $jk = $data['jenis_kel'];
        $agm = $data['agama'];
        $umur = $data['umur'];
    }
    ?>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <a class="navbar-brand" href="#">BIODATA</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        </nav>
    </header>

    <div class="container">
        <div class="row justify-content-center" style="padding:20px;">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header bg-dark text-white" >Isi Biodata Anda</div>
                         <div class="card-body">
                             <form action="proses.php?aksi=update" method="post">
                                <div class="form-group text-white">
                                      <label for="">Nama</label>
                                         <input type="text" name="nama" class="form-control" id="" placeholder="Nama Anda" value="<?php echo $nama;?>">
                                </div>
                                <div class="form-group">
                                         <label>Alamat</label>
                                         <textarea name="almt" class="form-control" rows="5" placeholder="Alamat Anda"><?php echo $almt;?></textarea>
                                </div>
                                <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" name="tgl" class="form-control" placeholder="Tanggal Lahir Anda" value="<?php echo $tgl;?>">
                                </div>
                                <div class="form-group">
                                        <label>Jenis Kelamin</label>&nbsp; &nbsp;
                                <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline1" name="jk" value="Laki-laki <?php ;?>" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadioInline1">Laki-laki</label>
                                    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <div class="form-check form-check-inline custom-radio">
                                            <input class="custom-control-input" id="customRadioInline2" type="radio" name="jk"  value="Perempuan <?php echo $alamat;?>">
                                            <label class="custom-control-label" for="customRadioInline2">Perempuan</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Agama</label>
                                    <select class="custom-select custom-select-md mb-3" name="agm" value="<?php echo $alamat;?>">
                                            <option value="Elektronik" selected>ISLAM</option>
                                            <option value="Fashion">SHINTO</option>
                                            <option value="Otomotif">KRISTAIN</option>
                                            <option value="Makanan">HINDU</option>
                                            <option value="Minuman">BUDHA</option>
                                    </select>
                                </div>
                                    <div class="form-group">
                                        <input type="submit" value="Simpan" name="simpan" class=" btn btn-success btn-block">
                                        <input type="reset" value="Reset" class="btn btn-danger btn-block">
                                    </div>
                                </form>
                      </div>
                  </div>
               </div>      
            </div>
        </div>
    </div>

    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>