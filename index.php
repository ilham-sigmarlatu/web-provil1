<?php $nama = "Ilham"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Beranda - Profil Pribadi</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <?php include 'header.php'; ?>

  <main>
    <section class="welcome">
      <h2>Halo, Saya <?php echo $nama; ?>!</h2>
      <p>Selamat datang di website pribadi saya. Di sini kamu bisa mengenal saya lebih dekat sebagai seorang pemain bola dan juga melihat aktivitas, berita, dan galeri saya.</p>
    </section>

    <section class="mini-gallery">
      <h2>Galeri Singkat</h2>
      <div class="gallery">
        <img src="assets/img/images.jpeg" alt="Latihan 1">
        <img src="assets/img/cristian-ronaldo1.jpeg" alt="Pertandingan 2">
        <img src="assets/img/foto mbape.jpeg" alt="Tim 3">
      </div>
    </section>
  </main>

  <?php include 'footer.php'; ?>

</body>
</html>
