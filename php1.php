<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tugas 1 Php</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

	<?php
	$welcome = "Welcome!";
	$web = "to My Website";
	?>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><br>
				<?php echo $welcome; ?> <small><?php echo $web; ?></small>
				</h1>
			</div>

			<?php
			$home = "Home";
			$porto = "Portofolio";
			$kontak = "Contact";
			?>
				
	<div class="row">
		<div class="col-md-12">
			<nav><br>
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="#home-section"><?php echo $home; ?></a>
					</li>
					<li class="breadcrumb-item">
						<a href="#portofolio-section"><?php echo $porto; ?></a>
					</li>
					<li class="breadcrumb-item active">
						<a href="#contact-section"><?php echo $kontak; ?></a>
					</li>
				</ol>
			</nav>
		</div>
	</div>

	<?php
	$nama = "Wa Bida";
	$alamat = "Mole";
	$email = "Wabida9641@gmail.com";
	$nope = "081239300965";
	$bio = "Biodata";
	$about = "About Me";
	$edu = "Education";
	$about1 = "Saya Wa Bida, mahasiswa semester 5 program studi Sistem Informasi Universitas Alma Ata angkatan tahun 2021. 
				Memiliki pengalaman dalam membuat tugas proyek aplikasi berbasis website dasar serta merancang desain UI dan 
				prototype. Saya memiliki keinginan serta minat untuk mengembangkan kemampuan dan berkarir di bidang IT
				sebagai Web Developer dan UI/UX Desaigner.";
	$edu1 = "Universitas Alma Ata (2021-2025)";
	$edu2 = "S1 Sistem Informasi - 
			Mengikuti berbagai Seminar/Workshop terkait bidang IT";
	$edu3 = "SMAN 3 Binongko (2017-2020)";
	$edu4 = "Jurusan IPA - Juara 1 Umum";
	?>

	<div class="row">
		<div class="col-md-12">
			<div id="home-section">
			<h3><br>
				<?php echo $bio; ?>
			</h3>
		</div>
	</div>
</div>
	<div class="row">
		<div class="col-md-12"><br>
			<img alt="Bootstrap Image Preview" src="https://th.bing.com/th/id/OIP.v1jPEiaThGB5T-ACOMDCUgHaEK?pid=ImgDet&rs=1">
			<dl>
				<dt><br>
					<?php echo $about; ?>
				</dt>

				<?php
    			echo 'Nama: ' . $nama . '<br>';
    			echo 'Alamat: ' . $alamat . '<br>';
    			echo 'Email: ' . $email . '<br>';
    			echo 'Nomor Telepon: ' . $nope . '<br>';
    			?>

				<dd><br>
					<?php echo $about1; ?>
				</dd><br>
				<dt>
					<?php echo $edu; ?>
				</dt>
				<dd>
					<h6><?php echo $edu1; ?></h6>
					<?php echo $edu2; ?><br><br>

					<h6><?php echo $edu3; ?></h6>
					<?php echo $edu4; ?>
				</dd>
			</dl>
		</div>
	</div>

	<?php 
	$portofol = "Portofolio";
	$pk = "Website Pencatatan Kependudukan";
	$pk1 = "Pengalaman saya dalam membuat website untuk pencatatan kependudukan melalui sebuah proyek kolaboratif bersama teman sekelas, dimana proyek ini diinisiasi berdasarkan tugas dari dosen. Dalam proyek ini, kami membangun seluruh aspek mulai dari perancangan basis data, penulisan kode PHP menggunakan framework CodeIgniter. Kami berhasil membuat sebuah website admin yang dilengkapi dengan fitur create, read, update, dan delete (CRUD).";
	$ui = "UI Design";
	$ui1 = "Saya berpengalaman dalam pengembangan aplikasi dengan pendekatan desain thinking. Salah satunya adalah aplikasi komunitas memasak dalam proyek kelompok dengan teman sekelas, juga tugas dari dosen. Selain itu, saya juga mengerjakan proyek aplikasi BiNovel secara individu, dimulai dari perancangan tampilan hingga presentasi prototipe.";
	?>

	<div class="row">
		<div class="col-md-12">
			<div id="portofolio-section">
			<h3><br>
			<?php echo $portofol; ?>
			</h3>
		</div>
	</div>
</div>
	<h5><br>
	<?php echo $pk; ?>
	</h5><img alt="Bootstrap Image Preview" src="images/cp.jpg" width="60%" />
</div>
<div class="col-md-8">
	<p>
		<small><?php echo $pk1; ?></small>
	</p>

	<h5>
	<?php echo $ui; ?>
	</h5><img alt="Bootstrap Image Preview" src="images/ui.png" width="60%" />
</div>
<div class="col-md-8">
	<p>
		<small><?php echo $ui1; ?></small>
	</p>

	<?php 
	$contact = "Contact Us";
	$address = "Address";
	$address1 = "Desa Waloindi, Binongko";
	$address2 = "Sulawesi Tenggara, Indonesia";
	$address3 = "Kode Pos: 93794";
	$wa = "WhatsApp";
	$no = "+6281239300965";
	$fb = "Facebook";
	$user1 = "Rk Vz";
	$ig = "Instagram";
	$user2 = "bda";
	$tiktok = "TikTok";
	$user3 = "Sy Bi";
	$name = "Name";
	$email1 = "Email";
	$subject = "Subject";
	$message = "Message";
	$send = "Send Message!";
	?>

	<div class="row">
		<div class="col-md-12">
			<div id="contact-section">
			<h3><br>
				<?php echo $contact; ?>
			</h3>
		</div>
	</div>
</div>
	<div class="row"><br>
		<div class="col-md-4">
			<link rel="stylesheet" href="icofont/icofont.css">
			<link rel="stylesheet" href="icofont/icofont.min.css">
			<link rel="stylesheet" href="icofont/demo.html">
			<img alt="Bootstrap Image Preview" src="https://www.simple-c.cc/wp-content/uploads/2014/02/contactus-300x288.jpg" class="rounded-circle"> 
			<address>
				 <strong><?php echo $address; ?></strong><br><?php echo $address1; ?><br><?php echo $address2; ?><br> <p><?php echo $address3; ?></p>
			</address>
		</div>
		<div class="col-md-4">
			<dl>
				<dt>
					<div class="icofont-whatsapp"><?php echo $wa; ?></div>
				</dt>
				<dd>
					<a href="https://wa.me/qr/GIVUIROYWOK7N1"><?php echo $no; ?></a>
				</dd>
				<dt>
					<div class="icofont-facebook"><?php echo $fb; ?></div>
				</dt>
				<dd>
					<a href="https://www.facebook.com/cyng.deb.5"><?php echo $user1; ?></a>
				</dd>
				<dt>
					<div class="icofont-instagram"><?php echo $ig; ?></div>
				</dt>
				<dd>
					<a href="https://instagram.com/bda702_?igshid=ZGUzMzM3NWJiOQ=="><?php echo $user2; ?></a>
				</dd>
				<dt>
					<div class="icofont-tiktok"><?php echo $tiktok; ?></div>
				</dt>
				<dd>
					<a href="https://www.tiktok.com/@sybi28_?_t=8fofbJfD16I&_r=1"><?php echo $user3; ?></a>
				</dd>
			</dl>
		</div>
		<div class="col-md-4">
			<form role="form">
				<div class="form-group">
					 
					<label for="exampleInputName1">
						<?php echo $name; ?>
					</label>
					<input type="text" class="form-control" id="exampleInputname1">
				</div>
				<div class="form-group">

					<label for="exampleInputEmail1">
						<?php echo $email1; ?>
					</label>
					<input type="email" class="form-control" id="exampleInputEmail1">
				</div>
				<div class="form-group">

					<label for="exampleInputSubject1">
						<?php echo $subject; ?>
					</label>
					<input type="text" class="form-control" id="exampleInputSubject1">
				</div>
				<div class="form-group">
					 
					<label for="exampleInputMessage1">
						<?php echo $message; ?>
					</label>
					<textarea name="message" cols="50" rows="5"></textarea>
				</div>
				<div class="form-group">
					 
				<button type="submit" class="btn btn-primary">
					<?php echo $send; ?>
				</button>
			</form>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>