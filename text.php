<?php
$db = mysqli_connect( "localhost", "root" ,"","crazymath");


$query = "INSERT INTO scores (username, score, playtime)
			VALUES ('anik', 30 , '2019-04-4 13:26:00')";

//jalankan queryuery);
$result = mysqli_query($db, $query);
//cek sukses tidaknya query
if ($result){
	echo"insert data sukses";
}else{
	echo"insert data gagal";
}



?>