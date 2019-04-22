<?php
// Koneksi ke mysql -> db: crazymath
$db = mysqli_connect("localhost", "root", "nihalimah", "score");
// query insert
$query = "INSERT INTO scores(username, score, playtime)
	VALUES ('indri', 30, '2019-04-04 13:26:00')";
// jalankan query
$hasil = mysql_query($db, $query);
// cek sukses?tidak query
if ($hasil){
	echo "insert data sukses";
	}else {
		echo "insert data gagal";
	}
?>