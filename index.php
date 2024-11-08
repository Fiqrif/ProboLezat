<?php 
    session_start();
    if(isset($_POST['logout'])){
        session_unset();
        session_destroy();
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Home</title>
	<link rel="stylesheet" href="css/style.css" />
</head>

<body>
	<div class="container">
		<header>
			<nav>
				<div class="logo" >
					<h1 id="judul" onmouseover="ubahWarna()" onmouseout="warnaAsli()">ProboLezat</h1>
				</div>
				<input type="checkbox" id="click" />
				<label for="click" class="menu-btn">
					<i class="fas fa-bars"></i>
				</label>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">About</a></li>
					<li><a href="login.php" class="btn_login">Login</a></li>
				</ul>
			</nav>
		</header>
		<main>
			<div class="jumbotron">
				<div class="jumbotron-text">
					<h1>Mangga Khas Kota Probolinggo</h1>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla commodi molestiae aliquam sit aperiam, distinctio odit consequatur sequi veniam ullam facilis tempora eos suscipit, atque harum ipsa quaerat alias eius.</p>
                    <p><h3>20k/Kg</h3></p>
				<!-- Snackbar -->
				<div id="snackbar" 
						 style="border-radius: 10px;"
						 onmouseover="sentuh()"
						 onmouseout="lepas()">Silahkan Login Terlebih Dahulu!</div>
					<button type="button" class="btn_getStarted" onclick="myFunction()">Beli Sekarang</button>
				</div> 
				<div class="jumbotron-img">
					<img style="border-radius: 32px;" src="asset/mangga.jpg" alt="" class="zoom-out"/>
				</div>
			</div>
			<div class="cards-categories">
				<h2>Macam-Macam Oleh-Oleh Khas Probolinggo</h2>
				<div class="card-categories">
					<div class="card">
						<div class="card-image">
							<img src="asset/anggur.jpeg" alt="gambar tidak ditemukan" />
						</div>
						<div class="card-content">
							<h5>Anggur</h5>
							<p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quo dolore optio, ducimus quisquam maxime doloribus rem accusantium! Quod suscipit explicabo consequuntur ex ipsam laborum tempore error temporibus impedit natus..</p>
							<p class="price"><span>Rp.</span> 20.000</p>
							<button class="btn_belanja" type="submit" onclick="bukaModal('Anggur')">Beli</button>
						</div>
					</div>
					<div class="card">
						<div class="card-image">
							<img src="asset/bawang goreng.jpg" alt="gambar tidak ditemukan" />
						</div>
						<div class="card-content">
							<h5>Bawang Goreng</h5>
							<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, sequi! Doloremque aperiam vel consequuntur modi quisquam impedit provident quasi, voluptas ad molestias ex hic quis eligendi consequatur laborum totam commodi.</p>
							<p class="price"><span>Rp.</span> 50.000</p>
							<button class="btn_belanja" type="submit" onclick="bukaModal('Bawang Goreng')">Beli</button>
						</div>
					</div>
					<div class="card">
						<div class="card-image">
							<img src="asset/keripik kentang.jpeg" alt="gambar tidak ditemukan" />
						</div>
						<div class="card-content">
							<h5>Keripik Kentang Bromo</h5>
							<p class="description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores quas maiores asperiores? Harum nulla minus libero numquam explicabo ipsum, doloribus blanditiis, delectus porro molestias ab, excepturi nisi quod labore eos?</p>
							<p class="price"><span>Rp.</span> 25.000</p>
							<button class="btn_belanja" type="submit" onclick="bukaModal('Keripik Kentang Bromo')">Beli</button>
						</div>
					</div>
				</div>
			</div>
			<!--  Modal -->
			<div id="myModal" class="modal-container" onclick="tutupModal()">
				<div class="modal-dialog" onclick="event.stopPropagation()">
					<div class="modal-content">
						<div class="modal-header">
							<h1 class="modal-title ">Formulir Pembayaran</h1>
							<button type="button" class="btn-close" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<form>
								<div class="form-group">
									<label class="labelmodal" for="recipient-name" class="col-form-label">Nama :</label>
									<input class="inputdata" type="text" class="form-control" id="recipient-name">
								</div>
								<div class="form-group">
									<label class="labelmodal" for="handphone" class="col-form-label">No. Hp :</label>
									<input class="inputdata" type="text" class="form-control" id="handphone">
								</div>
								<div class="form-group">
									<label class="labelmodal" for="alamat-text" class="col-form-label">Alamat:</label>
									<textarea class="inputalamat" class="form-control" id="alamat-text"></textarea>
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" onclick="tutupModal()">Keluar</button>
							<button type="button" class="btn btn-yellow" onclick="bukaModal2()">Lanjutkan</button>
						</div>
					</div>
				</div>
			</div>
			<!-- Modal 2 -->
			<div id="myModal2" class="modal-container" onclick="tutupModal2()">
				<div class="modal-dialog" onclick="event.stopPropagation()">
					<div class="modal-content">
						<div class="modal-header">
							<h1 class="modal-title">Data Transaksi</h1>
							<button type="button" class="btn-close" aria-label="Close" onclick="tutupModal2()"></button>
						</div>
						<div class="modal-body">
							<form>
								<!-- <h4> Kategori</h4> -->
								<div class="form-group">
									<label class="labelmodal" for="detail-kategori" class="col-form-label">Kategori
										:</label>
									<input class="inputdata" type="text" class="form-control" id="detail-kategori"
										disabled>
								</div>
								<div class="form-group">
									<label class="labelmodal" for="detail-harga" class="col-form-label">Harga :</label>
									<input class="inputdata" type="text" class="form-control" id="detail-harga"
										disabled>
								</div>
								<!-- <h4>Pembeli</h4> -->
								<div class="form-group">
									<label class="labelmodal" for="detail-nama" class="col-form-label">Nama :</label>
									<input class="inputdata" type="text" class="form-control" id="detail-nama" disabled>
								</div>
								<div class="form-group">
									<label class="labelmodal" for="detail-nomorhp" class="col-form-label">No. Hp
										:</label>
									<input class="inputdata" type="text" class="form-control" id="detail-nomorhp"
										disabled>
								</div>
								<div class="form-group">
									<label class="labelmodal" for="detail-alamat" class="col-form-label">Alamat:</label>
									<textarea class="inputalamat" class="form-control" id="detail-alamat"
										disabled></textarea>
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" onclick="kembaliKeModalPertama()">Kembali</button>
							<button type="button" class="btn btn-yellow" onclick="lakukanPembayaran()">Lakukan
								Pembayaran</button>
						</div>
					</div>
				</div>
			</div>
		</main>
		<footer >
			<h4 class="footer">&copy;ProboLezat MFF15</h4>
		</footer>
		<form action="index.php" method="POST" align="center" 	style="background-color: #ffb72b;">
			<p><?= $_SESSION["username"] ?></p>
			<button type="submit" name="logout" class="btn_logout">Logout</button>
		</form>
	</div>
	<script src="js/main.js"></script>
</body>

</html>
