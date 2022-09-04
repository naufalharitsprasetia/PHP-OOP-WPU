<?php 

// define("NAMA", "Naufal Harits Prasetia");


// echo NAMA;

// const UMUR = 32;
// echo "<br>";
// echo UMUR;

// class Coba {

// 	const NAMA = "Naufal Harits";

// }

// echo Coba::NAMA;

// echo  __FILE__;


// function coba() {
// 	return __FUNCTION__;
// }
// echo coba();

class Coba {
	public $kelas = __CLASS__;
}

$obj = new COBA;
echo $obj->kelas;




?>