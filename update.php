<?php
include"config.php";

    $kode  = $_POST['kode'];
	$matkul= $_POST['matkul'];
	$dosen = $_POST['dosen'];
	$hari  = $_POST['hari'];

	if(isset($kode) && isset($matkul) && isset($dosen) &&isset($hari)){

		$Q = mysql_query("UPDATE tb_mkl SET
						  nama_mk  = '$matkul',
						  dosen_mk = '$dosen',
						  hari_mk  = '$hari' 
						  WHERE kode_mk = '$kode'");

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