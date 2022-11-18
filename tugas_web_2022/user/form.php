<?php
    session_start();
    if (empty($_SESSION['akses'])){
        echo "
        <script>
            alert('Mohon Login terlebih dahulu..');
            window.location.href='../index.php';
        </script>
        ";
    };
?>
<?php
    include '../admin/functions.php';
    $pdo = pdo_connect_mysql();
    $msg = '';
    if (!empty($_POST)) {
        $id = htmlspecialchars(isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL);
        $email = htmlspecialchars(isset($_POST['email']) ? $_POST['email'] : '');
        $nama = htmlspecialchars(isset($_POST['nama']) ? $_POST['nama'] : '');
        $kota = htmlspecialchars(isset($_POST['kota']) ? $_POST['kota'] : '');
        $pesan = htmlspecialchars(isset($_POST['pesan']) ? $_POST['pesan'] : '');

        $stmt = $pdo->prepare('INSERT INTO berita VALUES (?, ?, ?, ?, ?)');
        $stmt->execute([$id, $email, $nama, $kota, $pesan]);
        $msg = 'Created Successfully!';
    }
?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/content.css">
<link rel="stylesheet" type="text/css" href="css/dark.css">
<link rel="stylesheet" type="text/css" href="css/form.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<link rel="stylesheet" href="css/styling.php" media="screen">
<style>
    input{
	width: 20%;
	height: 20px;
	background: #e0dede;
	justify-content: center;
	display: flex;
	margin: 5px auto;
	padding: 20px;
	border: none;
	outline: none;
	border-radius: 5px;
}
</style>
<div class="header">
    <div class="navbar">
        <a href="">Home</a>
        <a href="about.php">About Me</a>
        <a class="active" href="form.php">Hubungi Kami</a>
        <a class="logout" href="../logout.php" style="background-color: darkslategray; color:white;">Logout</a>
        <a class="time"><?php echo date("l, d.m.Y")?></a>
        <div id="theme-toggler" class="fas fa-moon"></div>  
    </div>
</div><br><br>
<div class="form">
    <form action="form.php" method="post">
        <label for="chk" aria-hidden="true" align="center">FORM BERITA TERBARU</label><br><br><br>
        <input type="email" name="email" placeholder="Email" required=""><br>
        <input type="name" name="nama" placeholder="nama" required=""><br>
        <input type="text" name="kota" placeholder="kota" required=""><br>
        <input type="text" name="pesan" placeholder="Pesan..." required=""><br>
        <button type="submit" value="Create">Create</button>
    </form>
    <?php if ($msg):?>
    <p><?=$msg?></p>
    <?php endif; ?>
    <div class="footer">
        <div class="kategori-footer" style="line-height: 2em;">
            <h1>Kategori</h1>
            <a href="">Entertainment</a><br>
            <a href="">Sports</a><br>
            <a href="">Music</a><br>
            <a href="">Film</a><br>
            <a href="">Politik</a><br>
            <a href="">Business</a><br>
            <a href="">Teknologi</a><br>
            <a href="">Otomotif</a><br>
            <a href="">Food & Travel</a><hr />
            <h3>@Copyright 2022 by Mohammad Fhadil Hafids Harsandi</h3>
        </div><br>
    </div>
    <script src="js/script.js"></script>
</div>