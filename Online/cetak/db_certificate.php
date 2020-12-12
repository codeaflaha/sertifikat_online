<?php
$con=mysqli_connect("localhost","root","aris","contoh_cetak");
$res=mysqli_query($con,"select * from student where status=0 limit 1");
if(mysqli_num_rows($res)>0){
	header('content-type:image/jpeg');
	$font=__DIR__ . '/BRUSHSCI.TTF';
	$font2=__DIR__ . '/AGENCYR.TTF';
	$image=imagecreatefromjpeg("certificate.jpg");
	$color=imagecolorallocate($image,19,21,22);
	while($row=mysqli_fetch_assoc($res)){
		$name=$row['name'];
		imagettftext($image,50,0,365,420,$color,$font,$name);
		$date="6th may 2020";
		imagettftext($image,20,0,450,595,$color,$font2,$date);
		$file=time().'_'.$row['id'];
		imagejpeg($image,"certificate/".$file.".jpg");
		imagedestroy($image);
		mysqli_query($con,"update student set status=1 where id='".$row['id']."'");
	}
}
?>