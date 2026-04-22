<?php
class Matematika {
    public static function kali($a, $b) {
        return $a * $b;
    }

    public static function bagi($a, $b) {
        return $a / $b;
    }

    public static function tambah($a, $b) {
        return $a + $b;
    }

    public static function kurang($a, $b) {
        return $a - $b;
    }

    public static function luasPersegiPanjang($sisi) {
        return $sisi * $sisi;
    }
}

echo "Kali: " . Matematika::kali(4, 5) . "<br>";
echo "Bagi: " . Matematika::bagi(10, 2) . "<br>";
echo "Tambah: " . Matematika::tambah(3, 7) . "<br>";
echo "Kurang: " . Matematika::kurang(10, 4) . "<br>";
echo "Luas Persegi: " . Matematika::luasPersegiPanjang(5) . "<br>";
?>
