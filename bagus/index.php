<?php 

// buatlah class dan object untuk menampilkan data mahasiswa

// deskripsi singkat -> Judul, Sutradara
// deskripsi lengkap -> Judul, Sutradara | tahun, Rating

class film {
    public  $j;

    public function __construct() {
        
    }

    public function deskSingkat() {

    }

    public function deskLengkap() {

    }
}

$obj1 = new film();

echo $obj1->deskSingkat(); // menampilkan deskripsi singkat
echo $obj1->deskLengkap(); // menampilkan deskripsi lengkap