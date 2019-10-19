<?php 
include 'databasep.php';
$produk = new Produk();
$aksi = $_GET['aksi'];
if(isset($_POST['simpan']))
{
    $id = $_POST['id'];
    $nama_produk = $_POST['nama_produk'];
    $kategori_produk= $_POST['kategori_produk'];
    $jumlah_produk= $_POST['jumlah_produk'];
    $harga_produk = $_POST['harga_produk'];
    $deskripsi = $_POST['deskripsi'];
    $sub_total = $jumlah_produk*$harga_produk;
}
if($aksi == "tambah")
{
    $produk->create($nama_produk,$kategori_produk,$jumlah_produk,$harga_produk,$deskripsi,$sub_total);
    header("location:data.php");
}elseif($aksi == "update")
{
    $produk->update($id,$nama_produk,$kategori_produk,$jumlah_produk,$harga_produk,$deskripsi,$sub_total);
    header("location:data.php");
}elseif($aksi == "delete")
{
    $produk->delete($_GET['id']);
    header("location:data.php");
}
?>