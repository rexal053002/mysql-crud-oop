<?php 
// menambah / memanggil file database.php
include 'databasedata.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Index Biodata Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <a class="navbar-brand" href="#">BIODATA</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        </nav>
    </header>
    
    <div class="container">
        <div class="row justify-content-lg-center" style="padding:20px;">
            <div class="col-md-12">
                <div class="card text-white bg-dark mb-3 align-content-center">
                    <div class="card-header">Tampilan Biodata Anda</div><br>
                    <div>
                     <a href="create.php" class="btn btn-info text-white" align="left">Input new Data</a><br>
                    <div class="col-md-12">
                        <div class="table-responsive ">
                            <table class="table text-white">
                                <tr>
                                    <th>NO  |</th>
                                    <th>Nama  |</th>
                                    <th>Alamat  |</th>
                                    <th>Tanggal Lahir  |</th>
                                    <th>Jenis Kelamin  |</th>
                                    <th>Agama  |</th>
                                    <th>Umur</th>
                                    <th colspan="5"><center>aksi</center></th>
                                </tr>
<?php
    $biodata = new Biodata();
    $no = 1;
    foreach($biodata->index() as $data) {
?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $data['alamat']; ?></td>
                                    <td><?php echo $data['tgl_lahir']; ?></td>
                                    <td><?php echo $data['jenis_kel']; ?></td>
                                    <td><?php echo $data['agama']; ?></td>
                                    <td><?php echo $data['umur'];?></td>
                                    <td><a href="show.php?id=<?php echo $data['id']; ?>" class="btn btn-info text-white">Show</a></td>
                                    <td><a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning text-white">Edit</a></td>
                                    <td><a href="proses.php?id=<?php echo $data['id']; ?>&aksi=delete" class="btn btn-danger text-white">Delete</a></td>                                  
                                </tr>
                                <?php }?>   
                            </table>
                            </div>
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