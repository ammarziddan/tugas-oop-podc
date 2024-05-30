<?php 

// buatlah class dan object untuk menampilkan deskripsi singkat dan deskripsi lengkap dari sebuah film

// deskripsi singkat -> Judul, Sutradara
// deskripsi lengkap -> Judul, Sutradara | tahun, Rating

class Film {
    public  $judul,
            $sutradara,
            $tahun,
            $rating;

    public function __construct() {
        
    }

    public function deskSingkat() {

    }

    public function deskLengkap() {

    }
}

$obj1 = new Film();

echo $obj->deskSingkat(); // menampilkan deskripsi singkat
echo $obj->deskLengkap(); // menampilkan deskripsi lengkap