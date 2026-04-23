<?php
class Produk {
    public static $jumlahProduk = 0;
    public $nama;
    public $harga;

    public function __construct($nama, $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
        self::$jumlahProduk++;
    }

    public function tambahProduk() {
        self::$jumlahProduk++;
    }

    public function tampilProduk() {
        echo "Produk: " . $this->nama . " - Harga: Rp" . $this->harga . "<br>";
    }
}

class Transaksi {
    final public function prosesTransaksi($produk) {
        echo "Transaksi diproses: " . $produk->nama . " seharga Rp" . $produk->harga . "<br>";
    }
}

$p1 = new Produk("Laptop", 10000000);
$p2 = new Produk("Mouse", 150000);
$p3 = new Produk("Keyboard", 350000);

$p1->tampilProduk();
$p2->tampilProduk();
$p3->tampilProduk();

echo "Total Produk: " . Produk::$jumlahProduk . "<br>";

$t = new Transaksi();
$t->prosesTransaksi($p1);
$t->prosesTransaksi($p2);
$t->prosesTransaksi($p3);
?>
