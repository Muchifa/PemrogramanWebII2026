<?php

class Mahasiswa {
	public $nama = "Andi";
	
	public $nim = 1234;
	
	public $jurusan = "Teknik Informatika";
	
	public function tampildata(){
		return "Data Mahasiswa";
	}

}

require_once("./Mahasiswa.php");

$mahasiswa = new Mahasiswa;

echo $mahasiswa->nama . "<br>"; // "Andi" 

echo $mahasiswa->nim . "<br>"; // 1234 

echo $mahasiswa->jurusan . "<br>"; // "Teknik Informatika" 

$mahasiswa->tampildata(); // "Data Mahasiswa"


?>