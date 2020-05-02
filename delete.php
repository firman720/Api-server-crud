<?php
include"config.php";

    $kode  = $_POST['kode'];
	
	if(isset($kode)){

		$Q = mysql_query("DELETE FROM tb_mkl WHERE kode_mk = '$kode'");

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