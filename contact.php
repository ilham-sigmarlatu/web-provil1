<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Kontak - Profil Pribadi</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header class="sticky">
    <h1>Profil Pribadi</h1>
    <nav>
      <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="blog.php">Blog</a>
    <a href="gallery.php">Galeri</a>
    <a href="contact.php">Kontak</a>
    </nav>
  </header>
  <main>
    <h2>Hubungi Saya</h2>
    <p><strong>Alamat:</strong> namrole </p>
    <form action="#" method="post">
      <label for="name">Nama:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="message">Pesan:</label>
      <textarea id="message" name="message" rows="5" required></textarea>

      <button type="submit">Kirim</button>
    </form>
  </main>
  <footer>
    <p>&copy; provil2025</p>
  </footer>
</body>
</html>
