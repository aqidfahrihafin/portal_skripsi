<!DOCTYPE html>
<html>

<head>
	<title>Reset Password</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

	<style>
		/* CSS styles go here */
		/* Example styles */
		body {
			font-family: sans-serif;
			background-color: #f2f2f2;

		}

		.container {
			max-width: 600px;
			margin: 0 auto;
			padding: 20px;
			font-size: x-small;
			font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
		}

		.container1 {
			max-width: 600px;
			margin: 0 auto;
			background-color: #fff;
			padding: 20px;
			border: solid rgb(167, 162, 162) 1px;
			border-radius: 10px;
		}

		a,
		button,
		input[type=submit],
		input[type=reset] {
			font-family: sans-serif;
			font-size: 15px;
			background: #22a4cf;
			color: white;
			border: white 3px solid;
			border-radius: 8px;
			padding: 12px 20px;
			margin-top: 10px;
		}

		a {
			text-decoration: none;
		}

		a:hover,
		button:hover,
		input[type=submit]:hover,
		input[type=reset]:hover {
			opacity: 0.9;
		}
	</style>
</head>

<body>
	<div class="container1">
		<div class="card border-1">
			<div align="center">
				<img src="<?php echo base_url('assetss/')?>img/logokecil.png" width="80" alt="">
			</div>
			<br>
			<div class="card-header" align="center">
				<b>SIKMA IST ANNUQAYAH</b>
			</div>
			<div align="center">
				<hr>
				<h3>Reset Password</h3>
			</div>
			<p>Dear : <b><?php echo $username; ?></b> </p>
			<p align="justify">
				Kami menerima permintaan untuk mengatur ulang kata sandi Anda. Jika Anda tidak membuat permintaan ini,
				<strong>abaikan email ini.</strong>
			</p>
			<p align="justify">Untuk mengatur ulang kata sandi Anda, silakan klik tombol reset di bawah ini:</p>
			<br><br>
			<div align="center"><a href="<?php echo $link; ?>">Reset Password</a></div>
			<br><br>
			<br>
			<p align="justify">Support by <strong>IT Team</strong> Institut Sains dan Teknologi Annuqayah Guluk-guluk
				sumenep.</p>
			<br>
			<hr>
			<div class="card-footer" align="center">
				<i> IT_Team IST Annuqayah</i>
			</div>
		</div>
	</div>
	<div class="container" align="center">
		<small>Anda menerima email ini sebagai
			pemberitahuan tentang perubahan penting pada Akun Sikma Anda</small><br>
		<small>© Copyright
			2022 - 2023 Sikma IST Annuqayah
		</small>
	</div>


</body>

</html>