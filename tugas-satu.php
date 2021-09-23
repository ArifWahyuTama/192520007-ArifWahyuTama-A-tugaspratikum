<!DOCTYPE html>
<html>
<head>
	<title>TUGAS</title>
	<style>
		.judul{ 
			font-size: 32px;
			text-align: center;
			}
		body {
			 background-size: cover;
			 background-image: url('a.jpg');
			 margin: 0;
			 font-family: sans-serif;
			 color: solid black;      
			 } 
		article {
			font-size: 18px;
			color: solid black;
			float: left;
			width: 100%;
            background-color: rgba(255,255,255,0.5);
            height: 200px;
			text-align: center;
		}
        section {
            background-color: rgba(255,255,255,0.5);
            margin-left: 300px;
            margin-right: 300px;
            margin-top: 100px;
        }
			
	</style>
</head>
<body>
    <?php
    $nim  = 192520007;
    $nama = "Arif Wahyu Tama";
    $alamat = "Nampu, Purwodadi, Purworejo";
    $email = "06.arifwahyu.9a@gmail.com";
    $bidang_minat = "belum tahu";
    ?>
    
	<section>
		<h1 class="judul">BIODATA DIRI</h1>
		<img src="aku.jpg" style = "margin-left: 285px; width: 200px;">
		<article >
        <p>Nim  : <?= $nim ?></p>
		<p>Nama : <?= $nama ?></p>
		<p>Alamat : <?= $alamat ?></p>
		<p>Alamat Email : <?= $email ?></p>
        <p>Bidang Minat : <?= $bidang_minat ?></p>
		</article>
	</section>
</body>
</html>