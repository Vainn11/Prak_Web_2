<!DOCTYPE html>
<html>
<head>
	<title>Kale</title>
	<link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<style type="text/css">
		* {
			box-sizing: border-box;
		}
		body {
			background-image: url();
			background-size: cover;
			font-family: "forte";
			margin: 0;
			padding: 0;
		}
		header {
			text-align: left;
			color: yellow;
			background-color: #5F9EA0;
		}
		section:after {
			content: "";
			display: table;
			clear: both;
		}
		nav {
			float: left;
			width: 20%;
			padding: 10px;
		}
		article {
			height: 650px;
			float: left;
			width: 100%;
			padding: 10px;
		}
		footer {
			text-align: center;
			color: white;
			padding: 10px;
			padding-left: 0px;
			background: tr;
		}
		.link_none {
			color: white;
		}
		button {
			padding: 12.5px 30px;
			border: 0;
			border-radius: 100px;
			background-color: #5F9EA0;
			color: #ffffff;
			font-weight: bold;
			transition: all 0.5s;
			-webkit-transition: all 0.5s;
		}
		button:hover {
			background-color: grey;
			box-shadow: 0 0 20px white;
			transform: scale(1.1);
		}
		button:active {
			background-color: black;
			transition: all 0.25s;
			-webkit-transition: all 0.25s;
			box-shadow: none;
			transform: scale(0.98);
		}
		ul {
			list-style-type: none;
			overflow: hidden;
			background-color: #5F9EA0;
			background-repeat: no-repeat;
			padding-left: 18px !important;
		}
		li a {
			display: block;
			color: white;
			text-align: center;
			padding: 20px 20px;
			text-decoration: none;
		}
		li {
			float: right;
		}
		li a:hover {
			background-color: #272727;
		}
		.active {
			background-color: #272727;
		}
	</style>
</head>
<body>
<header>
	<div class="active">
		<ul>
			<font face="forte" class="perpus"> 
				<li><a href="peminjaman.php" class="link_none">Peminjaman</a></li>
				<li><a href="member.php" class="link_none">Member</a></li>
				<li><a href="buku.php" class="link_none">Buku</a></li>
			</font>
		</ul>	
	</div>
</header>
<section>
	<article>
		<h2 style="text-align:center;">Member</h2>
		<center>
			<table border="1" class="table table-striped">
				<thead>
					<tr>
						<th><p>ID Member</p></th>
						<th><p>Nama</p></th>
						<th><p>Nomor</p></th>
						<th><p>Alamat</p></th>
						<th><p>Tanggal Daftar</p></th>
						<th><p>Tanggal Terakhir Bayar</p></th>
						<th><p>Aksi</p></th>
					</tr>
				</thead>
				<tbody>
					<?php
					require('model.php');
					if (isset($_GET['id_member'])){
						hapusmember($_GET['id_member']);
					}
					tampilmember();
					?>
				</tbody>
			</table>
		</center>
		<br><br>
		<center><a href="formmember.php"><button>Tambah Member</button></a></center>
		<br><br>
	</article>
</section>
</body>
</html>