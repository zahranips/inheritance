  <?php 
class Produk {
	public $namaBarang ,
	        $merk ,
	         $harga ,
	          $ukuranLayar,
	           $kapasitas;

	public function getCetak(){
		return "$this->merk,(Rp $this->harga)";
	}
    public function __construct($namaBarang ="nama barang",$merk ="merk",$harga =0,$ukuranLayar = "ukuran layar", $kapasitas= "kapasitas"){
        $this->namaBarang = $namaBarang;
        $this->merk = $merk;
        $this->harga = $harga;
        $this->ukuranLayar = $ukuranLayar;
        $this->kapasitas = $kapasitas;
    }

	public function cetakInfo(){
		$str = "{$this->namaBarang},{$this->getCetak()}";
		return $str;
    }
}

class laptop extends Produk{
	public function cetakInfo(){
		$str =" Laptop : {$this->namaBarang},{$this->getCetak()} | ukuranLayar : {$this->ukuranLayar}";
		return $str;
    }
}

class flashdisk extends Produk{
	public function cetakInfo(){
		$str =" Flashdisk : {$this->namaBarang},{$this->getCetak()} | kapasitas : {$this->kapasitas}";
		return $str;
    }

}
$produk1 = new laptop("idepad 310","lenovo",7000000,"14 inci","-");
$produk2 = new flashdisk("Flashdisk","sandisk",100000,"-","8 GB");

echo $produk1->cetakInfo();
echo "<br>";
echo $produk2->cetakInfo();
echo "<br>";
