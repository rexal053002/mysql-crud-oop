<?php 
    include '../database.php';
    $siswa = new Siswa();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit page</title>
</head>
<body>
    <?php 
        foreach($siswa->edit($_GET['id']) as $data)
        {
            $id = $data['id'];
            $nis = $data['nis'];
            $nama = $data['nama'];
            $alamat = $data['alamat'];
        }
    ?>
    <fieldset>
     <legend>Edit Data Siswa</legend>
     <form action="proses.php?aksi=update" method="post">
      <input type="hidden" name="id" value="<?php echo $id; ?>">
      <tr>
          <th>Nomor Induk Siswa</th>
          <td><input type="number" name="nis" value="<?php echo $nis; ?>" required></td>
      </tr>
      <tr>
          <th>Nama Siswa</th>
          <td><input type="text" name="nama" id="" cols="" rows="" value="<?php echo $nama;?>" required></input></td>
      </tr>
      <tr>
          <th>Alamat</th>
          <td><textarea name="alamat" id="" cols="" rows=""><?php echo $alamat;?></textarea></td>
      </tr>
      <tr>
          <td><input type="submit" name="save" value="simpan"></td>
      </tr>
     </form>
    </fieldset>
</body>
</html>