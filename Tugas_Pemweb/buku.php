<?php

// FADIYAH DESI ASMAWATI - 22090035 - 4C //

class Buku {

    private $judul,
            $tahun,
            $jmlhalaman,
            $bahanmaterial,
            $diskon;

    public function __construct($judul = "Judul", $tahun = "tahun", $jmlhalaman = "jmlhalaman", $bahanmaterial = "bahan material", $diskon = "diskon"){
        $this->judul = $judul;
        $this->tahun = $tahun;
        $this->jmlhalaman = $jmlhalaman;
        $this->bahanmaterial = $bahanmaterial;
        $this->diskon = $diskon;
    }

    public function getjudul() {
        return $this->judul;
    }

    public function gettahun() {
        return $this->tahun;
    }

    public function getjmlhalaman() {
        return $this->jmlhalaman;
    }

    public function getbahanmaterial() {
        return $this->bahanmaterial;
    }

    public function getdiskon() {
        return $this->diskon;
    }

    public function getharga() {
        $usia = date('Y') - $this->tahun;

        if ($usia <= 5) {
            if ($this->jmlHalaman <= 100) {
                return 100000;
            } elseif ($this->jmlHalaman > 500) {
                return 500000;
            } else {
                return 300000;
            }
        } elseif ($usia > 5 && $usia <= 10) {
            if ($this->jmlHalaman <= 100) {
                return 50000;
            } elseif ($this->jmlHalaman > 500) {
                return 250000;
            } else {
                return 150000;
            }
        } else {
            return 10000;
        }
    }
}

class Komik extends Buku {

    private $isColorful;
    private function __construct($judul, $tahun, $jmlhalaman, $bahanmaterial, $diskon, $isColorful) {
        parent::__construct($judul, $tahun, $jmlhalaman, $bahanmaterial, $diskon);
        $this->isColorful = $isColorful;
    }

    public static function buatBuku($judul, $tahun, $jmlhalaman) {
        return new self($judul, $tahun, $jmlhalaman, "", 0, true);
    }

    public function getIsColorful() {
        return $this->isColorful;
    }
}

$buku = new Buku("Calculus", 2024, 1000);
echo "Judul Buku: " . $buku->getJudul();
echo "<br>";
$komik = Komik::buatBuku("One Piece", 1998, 500);
echo "Judul Komik: " . $komik->getJudul();

?>