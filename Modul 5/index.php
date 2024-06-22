<!DOCTYPE html>
<html>
<head>
	<title>Kale</title>
	<link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
	<style type="text/css">
		* {
			box-sizing: border-box;
		}
		body {
			background-image: url("asd.png"); 
			background-size: 100%;
			font-family: "forte";
			margin: 0; 
			padding: 0; 
		}
		header {
			text-align: center; 
			background-color: #737373;
		}
		.link_none {
			color: white;
			font-size: 18px;
		}
		ul {
			list-style-type: none;
			margin: 0;
			padding: 0; 
			overflow: hidden;
			background-color: #5F9EA0;
			background-repeat: no-repeat;
			padding-left: 16px !important;
			background-size: 4%;
			background-position: 4%;
		}
		li {
			display: inline-block; 
			margin-right: 10px; 
		}
		li a {
			display: block;
			color: white;
			text-align: center;
			padding: 20px 20px;
			text-decoration: none;
		}
		li a:hover {
			background-color: #272727;
		}
		.active {
			background-color: #272727;
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
			width: 100%;
			padding: 10px;
		}
		footer {
			text-align: center;
			color: white;
			padding: 10px;
			padding-left: 0px;
		}
	</style>
</head>
<body>
	<header>
		<div class="active">
			<ul>
				<li><a href="buku.php" class="link_none">Buku</a></li>
				<li><a href="member.php" class="link_none">Member</a></li>
				<li><a href="peminjaman.php" class="link_none">Peminjaman</a></li>
			</ul>
		</div>
	</header>
</body>
</html>