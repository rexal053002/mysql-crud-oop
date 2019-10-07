<?php 
   class kls{

    public $lk;
    public $per;
    public $jmlh;
    public $wali;
    public $akreditas;

    public function data() {
        return"hadir";
    }
   }
    $kls1 = new kls();
    $kls1->lk = "20";
    $kls1->per = "10";
    $kls1->jmlh = "30";
    $kls1->wali = "Fitrika";
    $kls1->akreditas = "A";

    echo "laki-laki ada : $ksl1->lk siswa<br>";
    echo "Perempuan ada : $kls1->per siswi<br>";
    echo "Jumlah seluruhnya : $kls1->jmlh Murid<br>";
    echo "Nama Wali Kelas : $kls1->wali<br>";
    echo "Akreditasi Kelas : $kls1->akreditas<br>";
?>