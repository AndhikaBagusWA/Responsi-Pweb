<?php
	echo "<head><title>Georgia`s BARBERSHOP</title></head>";
	$tgl=date('d-m-Y');
	$nama=$_POST['nama'];
	$pesanan=$_POST['pesanan'];
	$jml_order=$_POST['jml_order'];

	if($pesanan=="reguler"){
		$total=$jml_order * 150000;
	}
	if($pesanan=="premium"){
		$total=$jml_order * 300000;
	}
	
	$fp = fopen("listOrder.txt", "a+");
	fputs($fp, "$tgl|$nama|$pesanan|$jml_order|$total\n");
	fclose($fp);

	echo "Terima Kasih Telah Menggunakan Jasa Kami <br>";
	echo "<a href=list.php>Lihat list</a> ";
 ?>