<!DOCTYPE html>
<html>
<head>
	<title>Membuat Halaman Web Dinamis Dengan PHP | www.malasngoding.com</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<!-- 
Author : diki alfarabi hadi 
Site : www.malasngoding.com
-->
<div class="content">
	<header>
		<h1 class="judul">SALSA VOLLEY BALL</h1>
		<h3 class="deskripsi">NEKO NEKO SMASH NDX AKA</h3>
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="index.php?page=home">HOME</a></li>
			<li><a href="index.php?page=tentang">TENTANG</a></li>
			<li><a href="index.php?page=tutorial">TUTORIAL</a></li>
            <li><a href="index.php?page=data-kelas">DATA KELAS</a></li>
			<li><a href="index.php?page=data-siswa">DATA SISWA</a></li>
			
		</ul>
	</div>
 
	<div class="badan">
 
 
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "home.php";
				break;
			case 'tentang':
				include "tentang.php";
				break;
			case 'tutorial':
				include "tutorial.php";
				break;
            case 'data-kelas':
                    include "../kls/tampil-kelas.php"; 
                    break;	

			case 'tambah-kelas':
					include "../kls/tambah-kelas.php";
					break;	
						
			case 'simpan-kelas':
					include "../kls/simpan-kelas.php";
					break;

			case 'hapus-kelas':
					include "../kls/hapus-kelas.php";
					break;

			case 'edit-kelas':
					include "../kls/edit-kelas.php";
					break;
			case 'update-kelas':
					include "../kls/update-kelas.php";
					break;





			case 'data-siswa':
					include "../index.php";
					break;	
			
			case 'tambah-siswa':
					include "../tambah-siswa.php";
					break;	
					
			case 'simpan-siswa':
					include "../simpan-siswa.php";
					break;
			case 'hapus-siswa':
					include "../hapus-siswa.php";
					break;
					case 'edit-siswa':
						include "../edit-siswa.php";
						break;
						case 'update-siswa':
							include "../update-siswa.php";
							break;
			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "home.php";
	}
 
	 ?>
 
	</div>
</div>
</body>