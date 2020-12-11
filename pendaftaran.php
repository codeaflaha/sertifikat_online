
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon.png" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Pendaftaran Anggota Baru IMLA</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="assets/css/main.css">


    <script src="assets/js/jquery-3.2.1.min.js"></script>

</head>
<body>
	<div class="container">
	    <div class="row">
	        <div class="col-sm-12 col-md-8 col-lg-10 col-lg-offset-1">

				<div class="card" style="margin-top: 50px">
                    <div class="card-header" data-background-color="blue">
                        <h4 class="title">Register Anggota Baru IMLA</h4>
                        <p class="category">Isi Form pendaftaran akun dengan benar, data ini akan digunakan untuk login akun anda</p>
                    </div>
                    <div class="card-content">
                        <form method="post" onsubmit="return checkForm(this);" action="imla_proses_simpan_pendaftaran.php" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Username</label>
                                        <input type="text" class="form-control" name="username" required autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" name="fullname" required autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Email</label>
                                        <input type="email" class="form-control" name="email" required autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Password</label>
                                        <input type="password" class="form-control" name="password" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Tempat Lahir</label>
                                        <input type="text" class="form-control" name="tempatLahir" required autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Tanggal Lahir</label>
                                        <input type="date" class="form-control" name="tglLahir" required autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Jenis Kelamin</label>
                                        <select name="gender" class="form-control" required autofocus>
                                            <option value="" disabled selected>-- Pilih Jenis Kelamin --</option>
                                        
                                            <option value="L">Laki-laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Wilayah Provinsi IMLA Indonesia</label>
                                        <select name="wilayah" class="form-control" required autofocus>
                                            <option value="" disabled selected>-- Pilih Provinsi --</option>

                                            <option value="01">Nanggro Aceh Darussalam</option>
                                            <option value="02">Sumatera Selatan</option>
                                            <option value="03">Sumatera Utara</option>
                                            <option value="04">DKI Jakarta</option>
                                            <option value="05">Jawa Tengah</option>
                                            <option value="06">Riau</option>
                                            <option value="07">Lampung</option>
                                            <option value="08">Kalimantan Timur</option>
                                            <option value="09">Jawa Barat</option>
                                            <option value="10">D.I. Yogyakarta</option>
                                            <option value="11">Sumatera Barat</option>
                                            <option value="12">Nusa Tenggara Barat</option>
                                            <option value="13">Kalimantan Selatan</option>
                                            <option value="14">Gorontalo</option>
                                            <option value="15">Banten</option>
                                            <option value="16">Jawa Timur</option>
                                            <option value="17">Kalimantan Tengah</option>
                                            <option value="18">Kep. Bangka Belitung</option>
                                            <option value="19">Nusa Tenggara Timur</option>
                                            <option value="20">Kalimantan Utara</option>        
                                            <option value="21">Kalimantan Barat</option>
                                            <option value="22">Bali</option>
                                            <option value="23">Kep. Riau</option>
                                            <option value="24">Bengkulu</option>
                                            <option value="25">Jambi</option>
                                            <option value="26">Sulawesi Utara</option>
                                            <option value="27">Sulawesi Barat</option>
                                            <option value="28">Sulawesi Tengah</option>
                                            <option value="29">Sulawesi Selatan</option>
                                            <option value="30">Sulawesi Tenggara</option>
                                            <option value="31">Maluku Utara</option>
                                            <option value="32">Maluku</option>
                                            <option value="33">Papua Barat</option>
                                            <option value="34">Papua</option>
                                        
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Alamat</label>
                                        <input type="text" class="form-control" name="alamat" required autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Afiliasi / Instansi</label>
                                        <input type="text" class="form-control" name="afiliasi" required autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Keahlian</label>
                                        <input type="keahlian" class="form-control" name="keahlian" required autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Nomor Handphone</label>
                                        <input type="phonenumber" class="form-control" name="telepon" required autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Upload Pasfoto Resmi Ukuran 3x4</label>
                                </div>
                            </div>
                            <input type="file" name="foto" id="foto" style="padding-left: 10px" required autofocus>
                            <p><input type="checkbox" required name="terms" style="margin-left: 12px; margin-top: 15px"> <u>Dengan mengirim data ini saya bertangungjawab penuh atas data yang saya kirimkan</u></p>

                            
							<button type="submit" name="submit" class="btn btn-primary pull-right">Kirim <i class="fa fa-arrow-right"></i></button>
                            

                            
                            <div class="clearfix"></div>
                        </form>

                    </div>
                </div>
	    </div>
	</div>
</body>
</html>