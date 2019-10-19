<?php 
    include 'databasep.php';
    $produk = new Produk();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Show Data page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
</head>
<body>
<?php 
    foreach($produk->show($_GET['id']) as $data)
        {
            $id = $data['id'];
            $nama_produk = $data['nama_produk'];
            $kategori_produk = $data['kategori_produk'];
            $jumlah_produk = $data['jumlah_produk'];
            $harga_produk = $data['jk'];
            $deskripsi = $data['deskripsi'];
            $sub_total = $data['sub_total'];
        }
    ?>
    <div class="container">
        <div class="row justify-content-center" style="padding:20px;">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header bg-dark text-white" >Data Show Shop</div>
                         <div class="card-body">
                             <form action="proses.php?aksi=tambah" method="post">
                                 <div class="form-group text-white">
                                      <label for="">Nama Produk</label>
                                         <input type="text" name="nama" class="form-control" id="" value="<?php echo $nama_produk; ?>"readonly>
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
                                         <input type="number" name="nama" class="form-control" id="" value="<?php echo $jumlah_produk; ?>"readonly>
                                    </div>
                                <div class="form-group">
                                    <label>Harga Produk</label>
                                         <input type="number" class="form-control" value="<?php echo $harga_produk; ?>" name="harga_produk" readonly>
                                </div>
                                    <div class="form-group">
                                                <label for="">deskirpsi</label>
                                         <input type="text" name="nama" class="form-control" id="" value="<?php echo $deskripsi; ?>"readonly>
                                    </div>
                                    <div class="form-group">
                                                <label for="">Total</label>
                                         <input type="text" name="sub_total" class="form-control" id="" value="<?php echo $sub_total; ?>"readonly>
                                    </div>
                                    <div class="form-group">
                                        <a href="data.php" class="btn btn-danger text-white">Kembali</a>
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