<?php 
	echo "<head><title>Orderan Pelanggan</title></head>";
	$fp = fopen("listOrder.txt", "r+");
	
	echo "<table border='1' width='80%' align='center'>";
	echo "<center><h1>List Pelanggan</title></h1> <a href=index.html> Halaman Utama </a>";
	echo "<tr><td>TANGGAL</td> <td>NAMA</td> <td>PESANAN</td> <td>JUMLAH ORDER</td> <td>TOTAL HARGA</td></tr>";
	while ($isi = fgets($fp,80))
	{
		$pisah = explode("|", $isi);
		echo "<tr><td>$pisah[0]</td> <td>$pisah[1]</td> <td>$pisah[2]</td> <td>$pisah[3]</td> <td>$pisah[4]</td></tr>";
	}
	echo "</table>";

 ?>