<?php 
$judul = $_POST['judul'];
$isi = $_POST['isi'];

if(empty($judul)){
	header("Location:index.php?include=tambah-konten&notif=tambahjudulkosong");
}else if(empty($isi)){
	header("Location:index.php?include=tambah-konten&notif=tambahisikosong");
}else{
	$sql = "insert into `konten` (`judul`, `isi`) values ('$judul', '$isi')";
	mysqli_query($koneksi,$sql);
	header("Location:index.php?include=konten&notif=tambahkontenberhasil");	
}
?>
