
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    aplikasi
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <?php include "theme/sidebar.php" ?>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              
              
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
		  <?php
				require_once 'config/koneksi.php';
				if (isset($_POST['submit'])) {
				  $nama = $_POST['nama'];
				   $institusi = $_POST['institusi'];			
				  // id_produk bernilai '' karena kita set auto increment
				  $q = $conn->query("INSERT INTO peserta VALUES (NULL, '$nama', '$institusi,'");
				 
				}
				  ?>
								  <!-- Button trigger modal -->
						<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
						  Tambah Data Peserta
						</button>

						<!-- Modal -->
						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
							<div class="modal-content">
							  <div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Tambah Data Peserta</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								  <span aria-hidden="true">&times;</span>
								</button>
							  </div>
							  <div class="modal-body">
								<form class="form-horizontal"  method="post" action="peserta_add.php">
									 <div class="form-row">
										<div class="form-group col-md-6">
										  
										  <input type="text" class="form-control" name="nama" placeholder="Nama Peserta">
										</div>
										<div class="form-group col-md-6">
										  
										  <input type="text" class="form-control" name="institusi" placeholder="Nama institusi">
										</div>
									  </div>									  																																						
									
							  </div>
							  <div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit" name="submit" class="btn btn-primary">Save changes</button>
							  </div>
							  </form>
							</div>
						  </div>
						</div>
		  <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Data Peserta</h4>
                  <p class="card-category"> --</p>
                </div>
                <div class="card-body">
                  <div class="material-datatables">
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Nama Peserta
                        </th>
                        <th>
                          Institusi
                        </th>                        
                        <th>
                          Opsi
                        </th>
                      </thead>
                      <tbody>
                        <?php 
						include 'config/koneksi.php';
						$no = 1;
						$data = mysqli_query($conn,"select * from peserta");
						while($d = mysqli_fetch_array($data)){
							?>
                        <tr>
                          <td>
                            <?php echo $no++; ?>
                          </td>
                          <td>
                            <?php echo $d['nama']; ?>
                          </td>
                          <td>
                            <?php echo $d['institusi']; ?>
                          </td>
                          
                          <td class="td-actions">
						  <a href="peserta_upd.php?id=<?= $d['no_registrasi'] ?>">
                            <button type="button" rel="tooltip" class="btn btn-success">
                              <i class="material-icons">edit</i>
                            </button></a>
							<a href="peserta_del.php?id=<?= $d['no_registrasi'] ?>" 
							onclick="return confirm('Anda yakin akan menghapus data ini?')">
                            <button type="button" rel="tooltip" class="btn btn-danger">
                              <i class="material-icons">close</i>
                            </button></a>
                          </td>
                        </tr>
                      </tbody>
                      <?php 
		}
		?>
                    </table>
            
            
          
          </div>
        </div>
      </div>
      <?php include "theme/footer.php" ?>
    </div>
  </div>
  
 <?php include "theme/js.php" ?>
 
</body>

</html>