<?php
class mahasiswa {
    // properti
    public $nim = 1;
    public $nama = "Muhammad Ryan Handhika Susanto";
    public $jurusan = "PPLG";

    function tampil_biodata() {
        echo $this->nim;
        echo $this->nama;
    }
}
$tampil = new mahasiswa();
$tampil->tampil_biodata();
?>