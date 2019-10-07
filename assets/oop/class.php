<?php 
   //1.Class adalah sebuah blueprint/template untuk membuat instance dari project
   //2.Class mendefinisikan object
   //3.Menyimpan data(property)dan perilaku(method)

   //Class dengan nama kucing
   class kucing{

    //membuat Property
    public $warna = "Abu";
    public $jml_kaki = "4";
    public $mkn_fav = "Ikan";

    //membuat method dengan nama bersuara
    public function bersuara() {
        return"Miaww";
    }
   }
    //membuat object baru
    //ditandai dengan keyword 'new'
    $kucing1 = new kucing();
    echo "Warna kucing : $kucing1->warna<br>";
    echo "Makanan favorit : $kucing1->mkn_fav";
   //var_dump($kucing1);
   
?>