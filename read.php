<?php
include"config.php";
	//Read
	$Query     = "SELECT * FROM tb_mkl ORDER BY kode_mk ASC";
	$run_query = mysql_query($Query);
	$hasil     = array();

	//Looping
	while ($data = mysql_fetch_array($run_query)) {

		array_push($hasil, array(
			'kode'   => $data['kode_mk'],
			'matkul' => $data['nama_mk'],
			'dosen'  => $data['dosen_mk'],
			'hari'   => $data['hari_mk'],
			));
	}//End

	//Tampilkan data
	echo json_encode(array(
        'matakuliah' => $hasil,
		));

?>