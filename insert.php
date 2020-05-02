<?php
include"config.php";

    $kode  = $_POST['kode'];
	$matkul= $_POST['matkul'];
	$dosen = $_POST['dosen'];
	$hari  = $_POST['hari'];

	if(isset($kode) && isset($matkul) && isset($dosen) &&isset($hari)){

		$Q = mysql_query("INSERT INTO tb_mkl
						  VALUES ('$kode','$matkul','$dosen','$hari')");

		if($Q){
			$response = 'berhasil';
		}else{
			$response = 'gagal';
		}

		echo json_encode(array(
            'status' => $response,
			));
	}

?>