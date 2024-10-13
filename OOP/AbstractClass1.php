<?php 

abstract class Buah {
  private $warna;

  // Metode abstrak yang harus diimplementasikan oleh kelas turunan
  abstract public function makan();

  // Setter untuk warna
  public function setWarna($warna) {
    $this->warna = $warna;
  } 

  // Getter untuk warna
  public function getWarna() {
    return $this->warna;
  }
}

class Apel extends Buah {
  public function makan() {
    // Implementasi cara makan apel
    echo "Kunyah apel hingga bagian tengah.\n";
  }
}

class Jeruk extends Buah {
  public function makan() {
    // Implementasi cara makan jeruk
    echo "Kupas jeruk dan kunyah.\n";
  }
} 

// Membuat objek dari kelas Apel dan memanggil metode makan
$apel = new Apel();
$apel->setWarna("Merah");  // Menetapkan warna apel
echo "Warna apel: " . $apel->getWarna() . "\n"; // Menampilkan warna apel
$apel->makan(); // Memanggil metode makan

// $buah = new Buah(); // Ini benar-benar tidak boleh diinstansiasi
// $buah->makan(); // Tidak valid karena Buah adalah kelas abstrak
?>
