<?php
	function amankan($isi){
		$aman = mysql_escape_string($isi);
		return $aman;
	}
	
	function hari_indo($tgl){
		$getHari = conHari(date('D', strtotime($tgl)));

		return $getHari;
	}
	
	function conHari($hari){ 
		 switch($hari){
		  case 'Sun':
		   $getHari = "Minggu";
		  break;
		  case 'Mon': 
		   $getHari = "Senin";
		  break;
		  case 'Tue':
		   $getHari = "Selasa";
		  break;
		  case 'Wed':
		   $getHari = "Rabu";
		  break;
		  case 'Thu':
		   $getHari = "Kamis";
		  break;
		  case 'Fri':
		   $getHari = "Jumat";
		  break;
		  case 'Sat':
		   $getHari = "Sabtu";
		  break;
		  default:
		   $getHari = "Salah"; 
		  break;
		 }
		 
		 return $getHari;
		}
		
	function tgl_indo($tgl){
			$tanggal = substr($tgl,8,2);
			$bulan = getBulan(substr($tgl,5,2));
			$tahun = substr($tgl,0,4);
			return $tanggal.' '.$bulan.' '.$tahun;		 
	}	

	function getBulan($bln){
				switch ($bln){
					case 1: 
						return "Januari";
						break;
					case 2:
						return "Februari";
						break;
					case 3:
						return "Maret";
						break;
					case 4:
						return "April";
						break;
					case 5:
						return "Mei";
						break;
					case 6:
						return "Juni";
						break;
					case 7:
						return "Juli";
						break;
					case 8:
						return "Agustus";
						break;
					case 9:
						return "September";
						break;
					case 10:
						return "Oktober";
						break;
					case 11:
						return "November";
						break;
					case 12:
						return "Desember";
						break;
				}
			} 
?>
