<?php 
// menambah / memanggil file database.php
include 'databasep.php';
$produk = new Produk();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css"/>
    
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <a class="navbar-brand" href="#">DarkShop</a>
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

    <div class="container">
        <div class="row justify-content-lg-center" style="padding:20px;">
            <div class="col-md-12">
                <div class="card text-white bg-dark mb-3 align-content-center" >
                    <div class="card-header">Review Data</div><br>
                    <div>
                     <a href="create.php" class="btn btn-info text-white" align="left">Input new Data</a><br>
                    <div class="col-md-12">
                        <div class="table-responsive ">
                            <table class="table text-white" id="fix">
                                <tr>
                                    <th>NO</th>
                                    <th>Nama Produk</th>
                                    <th>Kategori Produk</th>
                                    <th>Jumlah Produk</th>
                                    <th>Harga Produk</th>
                                    <th>Deskripsi</th>
                                    <th>Total</th>
                                    <th colspan="5"><center>aksi</center></th>
                                </tr>
</thead>
<tbody>                                
<?php
    $no = 1;
    foreach($produk->index() as $data) {
        $sub_total += $data['sub_total'];
?>
                                <tr>
                                    <td><center><?php echo $no++; ?></center></td>
                                    <td><center><?php echo $data['nama_produk']; ?></center></td>
                                    <td><center><?php echo $data['kategori_produk']; ?></center></td>
                                    <td><center><?php echo $data['jumlah_produk']; ?></center></td>
                                    <td><center><?php echo $data['harga_produk']; ?></center></td>
                                    <td><center><?php echo $data['deskripsi']; ?></center></td>
                                    <td><center><?php echo $data['sub_total'];?></center></td>
                                    <td><a href="show.php?id=<?php echo $data['id']; ?>" class="btn btn-info text-white">Show</a></td>
                                    <td><a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning text-white">Edit</a></td>
                                    <td><a href="proses.php?id=<?php echo $data['id']; ?>&aksi=delete" class="btn btn-danger text-white">Delete</a></td>                                  
                                    <tbody>   </tr>
                                <?php }?> 
                                </tbody>  
                            </table>
                            </div>
                            <?php 
							    echo "Total Pembayaran : $sub_total";
						    ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="DataTables/datatables.min.js"></script>
	<script type="text/javascript">
    <script> $(document).ready(function() {
    $('fix').DataTable();
    } 
);
</script>
</body>
</html>