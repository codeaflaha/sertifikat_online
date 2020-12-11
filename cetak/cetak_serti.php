
<?php
//header('Content-type: image/jpeg');
$con=mysqli_connect("localhost","root","aris","sertifikat");
$name1 = $_GET['id'];
$res=mysqli_query($con,"select * from peserta where no_registrasi='$name1'");
if(mysqli_num_rows($res)>0){
	
	header('content-type:image/jpeg');
	$font=__DIR__ . '/BRUSHSCI.TTF';
	$font2=__DIR__ . '/AGENCYR.TTF';
	$image=imagecreatefromjpeg("certificate.jpg");
	$color=imagecolorallocate($image,19,21,22);
	while($row=mysqli_fetch_assoc($res)){
		$name=$row['nama'];
		imagettftext($image,50,0,280,420,$color,$font,$name);
		$date="6th may 2020";
		imagettftext($image,20,0,450,595,$color,$font2,$date);		
		$file=$row['no_registrasi'].'_'.$name;
		imagejpeg($image,"serti/".$file.".jpg");
		imagedestroy($image);
	//	imagejpeg($image);
	//	imagedestroy($image);
	//	mysqli_query($con,"update student set status=1 where id='".$row['id']."'");
	//echo "<script>alert('Sertifikat Berhasil dcetak'); window.location.href='.serti/".$file.".jpg.'</script>";
	}
}
	