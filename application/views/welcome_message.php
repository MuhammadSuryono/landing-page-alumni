<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Registrasi Form</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="../../assets/css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="../../assets/css/style.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body style="background-image: url('../../assets/img/air-terjun.jpg');">
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-4" style="margin-top: 200px">
						<div class="booking-cta">
							<h1>Form Registrasi Anggota</h1>
							<p>Landing page ini berfungsi untuk mendaftarkan diri sebagai keanggotaan Alumni SMAN 6 Lubuklinggau</p>
						</div>
					</div>
					<div class="col-md-7 col-md-offset-1">
						<div class="booking-form">
							<form>
								<div class="form-group">
									<div class="form-checkbox">
										<img src="../../assets/img/logo.png" style="width: 10%" />
										<span class="form-label-title">Daftarkan diri anda untuk bisa bergabung kedalam organisasi Alumni SMAN 6 Lubuklinggau</span>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Nama Depan</span>
											<input class="form-control" type="text" placeholder="Nama Depan" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Nama Belakang</span>
											<input class="form-control" type="text" placeholder="Nama Belakang" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<span class="form-label">Kontak / No. Seluler <small style="color: red">*Terhubung ke Whatsapp / Telegram</small></span>
											<input class="form-control" type="text" placeholder="08xxxx" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<span class="form-label">Tahun Angkatan</span>
											<select class="form-control" required>
												<option>2007</option>
												<option>2008</option>
												<option>2009</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-md-8">
										<div class="form-group">
											<span class="form-label">Alamat</span>
											<input class="form-control" type="text" placeholder="Alamat" required />
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12" style="margin-top: 10px; margin-bottom: 10px;">
										<div class="card">
											<div class="card-header">
												<h6>TATA TERTIB</h6>
											</div>
											<div class="card-body">
												<p>Demi terwujudnya tujuan dengan adanya Ikatan Alumni maka setiap anggota baru yang mendaftar siap menerima segala tata tertib yang berlaku selama menjadi anggota Ikatan Alumni. Berikut tata tertib tersebut dibawah ini: </p>
												<ol>
													<li>Wajib gabung ke group Sosial Media untuk kelancaran kegiatan Alumni</li>
													<li>Wajib memberikan response pada setiap informasi yang dimana melibatakan semua anggota</li>
													<li>Bersedia mengikuti kegiatan kumpul bersama secara daring per dua minggu atau satu bulan sekali</li>
													<li>Bersedia menyediakan waktu, tenaga dan pemikirannya untuk kemajuan Ikatan Alumni</li>
													<li>Bersedia bertingkah laku baik selama dalam kegiatan dan tidak melakukan kegiatan yang membahayakan orang lain</li>
												</ol>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-checkbox">
										<label for="syarat">
											<input type="radio" id="syarat" name="syarat" required>
											<span></span>Saya telah membaca tata tertib diatas dan menyetujuinya
										</label>
									</div>
								</div>
								<div class="form-btn">
									<button class="submit-btn">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
