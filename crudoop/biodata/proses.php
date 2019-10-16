<?php 
include '../databasedata.php';
$siswa = new Siswa();
$aksi = $_GET['aksi'];
if(isset($_POST['save']))
{
    $nama = $_POST['nama'];
    $alamat= $_POST['alamat'];
    $tglhr = $_POST['tglhr'];
    $jk = $_POST['jk'];
    $agm = $_POST['agm'];
    $umur = $_POST['umur'];
}
if($aksi == "tambah")
{
    $siswa->create($id,$nama,$alamat,$tglhr,$jk,$agm,$umur);
    header("location:index.php");
}elseif($aksi == "update")
{
    $siswa->update($id,$nama,$alamat,$tglhr,$jk,$agm,$umur);
    header("location:index.php");
}elseif($aksi == "delete")
{
    $siswa->delete($_GET['id']);
    header("location:index.php");
}
?>