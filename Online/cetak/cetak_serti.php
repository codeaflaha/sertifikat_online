<?php
	// $nama = $_POST['namacetak'];
	$con=mysqli_connect("localhost","root","aris","sertifikat");
	$id = $_GET['id'];
	$res=mysqli_query($con,"select * from peserta where no_registrasi='$id'");
	if(mysqli_num_rows($res)>0){
		while($row=mysqli_fetch_assoc($res)){
			$name=$row['nama'];
		}
	}
	// echo $nama;
	if (empty($id)) {
		$gambar = "1.jpg";
	// 	echo $nama;
	}
		else {
		$gambar = "certificate.jpg";
	}
	$image = imagecreatefromjpeg($gambar);
	$white = imageColorAllocate($image, 255, 255, 255);
	$black = imageColorAllocate($image, 0, 0, 0);
	$font = "./AGENCYR.TTF";
	$font1 = "./BRUSHSCI.TTF";
	$size = 42;
	$size1 = 18;
	//definisikan lebar gambar agar posisi teks selalu ditengah berapapun jumlah hurufnya
	$image_width = imagesx($image);  
	//membuat textbox agar text centered
	$text_box = imagettfbbox($size,0,$font,$name);
	$text_width = $text_box[2]-$text_box[0]; // lower right corner - lower left corner
	$text_height = $text_box[3]-$text_box[1];
	$x = ($image_width/2) - ($text_width/2);
	//generate sertifikat beserta namanya
	imagettftext($image, $size, 0, $x, 400, $black, $font, $name);
	$date="6th may 2020";
	imagettftext($image, $size1,0,450,595,$black,$font1,$date);
	//tampilkan di browser
	header("Content-type:  image/jpeg");
	imagejpeg($image);
	imagedestroy($image);
?>
