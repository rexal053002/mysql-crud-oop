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
            <a class="navbar-brand" href="#">ARIZ ShopDark</a>
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
    <form action="proses.php?aksi=tambah" method="post">
    <div class="container">
        <div class="row justify-content-center" style="padding:20px;">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header bg-dark text-white" >Isi shop Anda</div>
                         <div class="card-body">
                             
                                 <div class="form-group text-white">
                                      <label for="">Nama Produk</label>
                                         <input type="text" name="nama_produk" class="form-control">
                                 </div>
                                 <div class="form-group">
                                    <label>Kategori Produk</label>
                                    <select class="custom-select custom-select-md mb-3" name="kategori_produk">
                                            <option value="Elektronik" selected>Elektronik</option>
                                            <option value="Fashion">Fashion</option>
                                            <option value="Otomotif">Otomotif</option>
                                            <option value="Praktik Medis">Praktik Medis</option>
                                            <option value="Furniture">Furniture</option>
                                    </select>
                                    </div>
                                    <div class="form-group">
                                                <label for="">Jumlah Produk</label>
                                                <input type="number" name="jumlah_produk" class="form-control"><br>
                                    </div>
                                    <div class="form-group">
                                        <label>Harga Produk</label>
                                        <input type="number" name="harga_produk" class="form-control">
                                    </div>
                                    <div class="form-group">
                                                <label for="">Deskirpsi</label>
                                                <input type="text" name="deskripsi" class="form-control"><br>
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