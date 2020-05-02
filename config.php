<?php
error_reporting(E_ALL ^ E_DEPRECATED);
//Properti Database
     $db_host = "localhost";
     $db_user = "root";
     $db_pass = "";
     $db_name = "absen1";
 
       $koneksi=mysql_connect($db_host, $db_user, $db_pass, $db_name);
		if($koneksi){
		mysql_select_db($db_name);	
		}
		 else{
			echo "Database tidak ditemukan..."; 
		 }
			
?>