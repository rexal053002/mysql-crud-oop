<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create page</title>
</head>
<body>
    <fieldset>
    <legend>Input Data Siswa</legend>
    <form action="proses.php?aksi=tambah" method="post">
    <table>
     <tr>
         <th>Nomor Induk Siswa</th>
         <td><input type="number" name="nis" required></td>
     </tr>
     <tr>
         <th>Nama Siswa</th>
         <td><input type="text" name="nama" required></td>
     </tr>
     <tr>
         <th>Alamat Siswa</th>
         <td><textarea name="alamat" cols="40"required></textarea></td>
     </tr>
     <tr>
         <th><input type="submit" name="save" value="simpan"></th>
     </tr>
      </table>
    </form>
    </fieldset>
</body>
</html>