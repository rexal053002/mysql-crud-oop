<?php 
include 'databasedata.php';
$biodata = new Biodata();
$aksi = $_GET['aksi'];
if(isset($_POST['simpan']))
{
    $nama = $_POST['nama'];
    $almt= $_POST['almt'];
    $tgl = $_POST['tgl'];
    $jk = $_POST['jk'];
    $agm = $_POST['agm'];
    $u=date("Y",strtotime($tgl));
    $umur = date("Y")-$u;
}
if($aksi == "tambah")
{
    $biodata->create($nama,$almt,$tgl,$jk,$agm,$umur);
    header("location:index.php");
}elseif($aksi == "update")
{
    $biodata->update($id,$nama,$almt,$tgl,$jk,$agm,$umur);
    header("location:index.php");
}elseif($aksi == "delete")
{
    $biodata->delete($_GET['id']);
    header("location:index.php");
}
?>