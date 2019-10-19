<?php 
    include 'databasep.php';
    $produk = new Produk();
    ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>d</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <a class="navbar-brand" href="#">Darkhop</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                   data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                   aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="create.php">BuyShop</a>
                    </li>                
                </ul>
            </div>
        </nav>
    </header>
    <br>
      <br>
    <br>
    <br>
<?php 
    foreach($produk->edit($_GET['id']) as $data)
    {
        //id penting
        $id = $data['id'];
        $nama_produk = $data['nama_produk'];
        $kategori_produk = $data['kategori_produk'];
        $jumlah_produk = $data['jumlah_produk'];
        $harga_produk = $data['harga_produk'];
        $deskripsi = $data['deskripsi'];
        $sub_total = $data['sub_total'];
    }
?>
    <form action="proses.php?aksi=update" method="post">
    <div class="container">
        <div class="row justify-content-center" style="padding:20px;">
            <div class="col-md-10">
                <Isi class="card">
                    <div class="card-header bg-dark text-white" ></div>
                         <div class="card-body">
                            <input type="hidden" name="id" value="<?php echo $id; ?>"> 
                             
                                 <div class="form-group text-white">
                                      <label for="" class="text-dark">Nama Produk</label>
                                         <input type="text" name="nama_produk" class="form-control" id="" value="<?php echo $nama_produk; ?>">
                                 </div>
                                 <div class="form-group">
                                        <label>Kategori Produk</label>
                                        <select name="kategori_produk" class="custom-select custom-select-md mb-3">
                                            <option value="Electronik" <?php if($kategori_produk=="Electronik"){echo "selected";} ?>>Electronik</option>
                                            <option value="fashion" <?php if($kategori_produk=="Fashion"){echo "selected";} ?>>Fashion</option>
                                            <option value="Otomotif" <?php if($kategori_produk=="Otomotif"){echo "selected";} ?>>Otomotif</option>
                                            <option value="Praktik Medis" <?php if($kategori_produk=="Fashion"){echo "selected";} ?>>praktik Medis</option>
                                            <option value="Furniture" <?php if($kategori_produk=="Furniture"){echo "selected";} ?>>Furniture</option>
                                        </select>
                                </div>
                                    <div class="form-group">
                                                <label for="">Jumlah Produk</label>
                                                <input type="number" name="jumlah_produk" class="form-control" value="<?php echo $jumlah_produk; ?>"><br>
                                    </div>
                                    <div class="form-group">
                                        <label>Harga Produk</label>
                                        <input type="number" name="harga_produk" class="form-control" value="<?php echo $harga_produk; ?>">
                                    </div>
                                    <div class="form-group">
                                                <label for="">deskirpsi</label>
                                                <input type="text" name="deskripsi" class="form-control" value="<?php echo $deskripsi; ?>"><br>
                                    </div>
                                    <div class="form-group">
                                                <label for="">Total</label>
                                                <input type="number" name="sub_total" class="form-control" value="<?php echo $sub_total; ?>"><br>
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