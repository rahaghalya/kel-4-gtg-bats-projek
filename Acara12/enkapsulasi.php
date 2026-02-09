<?php
class Mobil { 
    public $merk;        // Akses publik (dapat diakses dari luar kelas) 
    protected $tahun;    // Akses terlindungi (hanya dapat diakses dari dalam kelas dan kelas turunan) 
    private $harga;      // Akses privat (hanya dapat diakses dari dalam kelas) 
    
    // Setter untuk tahun
    public function setTahun($tahun) {
        $this->tahun = $tahun;
    }

    // Setter & Getter untuk harga
    public function setHarga($harga) { 
        $this->harga = $harga; 
    } 
    public function getHarga() { 
        return $this->harga; 
    } 

    // Method protected hitung pajak
    protected function hitungPajak() { 
        return $this->harga * 0.1;  // 10% dari harga mobil
    } 

    // Menampilkan informasi mobil
    public function tampilkanInformasi() { 
        echo "Merk Mobil: " . $this->merk . "<br>"; 
        echo "Tahun Pembuatan: " . $this->tahun . "<br>"; 
        echo "Harga Mobil: Rp " . number_format($this->getHarga(), 0, ',', '.') . "<br>"; 
        echo "Pajak: Rp " . number_format($this->hitungPajak(), 0, ',', '.') . "<br>"; 
    } 
} 

// Membuat objek
$mobil = new Mobil(); 
$mobil->merk = "Toyota";          // Akses publik langsung
$mobil->setTahun(2020);           // Mengatur tahun lewat setter (karena protected)
$mobil->setHarga(200000000);      // Mengatur harga lewat setter
$mobil->tampilkanInformasi();     // Menampilkan informasi mobil
?>
