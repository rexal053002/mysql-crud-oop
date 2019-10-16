<?php 
class Database {
    // $host = untuk memberitau kita menggunakan server lokal yaitu localhost,
    // $user = username dari localhost
    // $pass = password untuk masuk ke localhost mysql kita, kosongkan jika tidak menggunakan password
    // $db = untuk memberi akses kita menggunakan database mana di server lokal kita (localhost)
    public $host = "localhost", $user = "root", $pass = 123, $db="Biodata";
    public $koneksi;
    public function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        if($this->koneksi)
        {
            // echo "berhasil";
        } else {
            return "Koneksi Database Gagal";
        }
    }
}
class Siswa extends Database {
    // Menampilkan Semua Data
    public function index()
    {
        
        $datasiswa = mysqli_query($this->koneksi,"select * from biodata");
        // var_dump($datasiswa);
        return $datasiswa;
    }
    // Menambah Data
    public function create($id, $nama, $alamat,$tglr,$jk,$agm,$umur)
    {
        
        mysqli_query($this->koneksi,"insert into biodata values('','$nama', '$alamat','$tglr','$jk','$agm','$umur')");
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id)
    {
        $datasiswa = mysqli_query($this->koneksi,"select * from biodata where id='$id'");
        return $datasiswa;
    }
    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $datasiswa = mysqli_query($this->koneksi,"select * from biodata where id='$id'");
        return $datasiswa;
    }
    // mengupdate data berdasarkan id
    public function update($id, $nama, $alamat,$tglhr,$jk,$agm,$umur)
    {
        mysqli_query($this->koneksi,"update biodata set nama='$nama', alamat='$alamat' ,tanggalahir='$tglhr',jeniskelamin='$jk',agama='$agm',umur=$umur, where id='$id'");
    }
    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi,"delete from biodata where id='$id'");
    }
}
// koneksi DB
$db = new Database();
?>