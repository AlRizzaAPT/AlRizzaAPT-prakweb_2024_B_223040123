<?php

class Mahasiswa_model {
    private $mhs = [
        [
            "nama" => "Sandhika Galih",
            "nrp" => "043040023",
            "email" => "sandhikagalih@unpas.ac.id",
            "jurusan" => "Teknik Informatika"
        ],
        [
            "nama" => "Doddy Ferdiansyah",
            "nrp" => "133050321",
            "email" => "doddy@gmail.com",
            "jurusan" => "Teknik Mesin"
        ],
        [
            "nama" => "Erik Doank",
            "nrp" => "163030123",
            "email" => "erik@yahoo.com",
            "jurusan" => "Teknik Industri"
        ]
    ];

    public function getAllMahasiswa()
    {
        return $this->mhs;
    }
}
