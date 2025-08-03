<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Galeri Foto</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      background-color: #ffffff;
    }

    header {
      background-color: #0c2b4d;
      color: white;
      padding: 20px 0;
      text-align: center;
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    nav {
      margin-top: 10px;
    }

    nav a {
      color: rgb(255, 255, 255);
      text-decoration: none;
      margin: 0 15px;
      font-weight: bold;
    }

    nav a:hover {
      text-decoration: underline;
    }

    main {
      max-width: 1000px;
      margin: 40px auto;
      padding: 0 20px;
    }

    h2 {
      color: #090f16;
      text-align: center;
      margin-bottom: 30px;
    }

    .gallery {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
    }

    .gallery img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }

    .gallery img:hover {
      transform: scale(1.05);
    }

    footer {
      background-color: #07203b;
      color: rgb(255, 255, 255);
      text-align: center;
      padding: 15px 0;
      margin-top: 40px;
    }
  </style>
</head>
<body>

  <header>
    <h1>Galeri Saya</h1>
    <nav>
      <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="blog.php">Blog</a>
    <a href="gallery.php">Galeri</a>
    <a href="contact.php">Kontak</a>
    </nav>
  </header>

  <main class="gallery-page">
  <h2>Galeri Saya</h2>
  <div class="gallery-grid">
    <img src="assets/img/cristian-ronaldo1.jpeg" alt="Cristiano Ronaldo">
    <img src="assets/img/cristian.jpeg" alt="Cristiano">
    <img src="assets/img/foto mbape.jpeg" alt="Mbappe">
    <img src="assets/img/lionel messi.jpeg" alt="Lionel Messi">
    <img src="assets/img/images.jpeg" alt="Football">
    <img src="assets/img/mbape.jpeg" alt="Mbappe 2">
  </div>
</main>

  <footer>
    <p>&copy; Profil2025 </p>
  </footer>

</body>
</html>
