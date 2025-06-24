<?php
session_start();
if (!isset($_SESSION['username'])) {
  echo "<script>alert('Anda harus login terlebih dahulu');window.location='login.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Beranda Admin</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

  <!-- Header -->
  <header class="bg-blue-900 text-white p-6 text-center text-2xl font-bold">
    Dashboard Admin | Personal Web
  </header>

  <!-- Navigation -->
  <nav class="bg-blue-700 text-white py-3">
    <ul class="flex justify-center space-x-8 text-lg font-medium">
      <li><a href="beranda_login.php" class="hover:underline">Beranda</a></li>
      <li><a href="data_artikel.php" class="hover:underline">Data Artikel</a></li>
      <li><a href="data_gallery.php" class="hover:underline">Data Gallery</a></li>
      <li><a href="data_about.php" class="hover:underline">Tentang Saya</a></li>
      <li><a href="logout.php" class="hover:underline text-red-300">Logout</a></li>
    </ul>
  </nav>

  <!-- Content -->
  <main class="max-w-4xl mx-auto mt-8 bg-white p-6 rounded shadow">
    <h2 class="text-xl font-bold mb-4 text-blue-800">Selamat Datang, <?php echo $_SESSION['username']; ?>!</h2>
    <p>Silakan pilih menu di atas untuk mengelola konten website Anda:</p>
    <ul class="list-disc list-inside mt-4 space-y-2 text-gray-700">
      <li><strong>Data Artikel</strong>: Tambah/edit/hapus artikel di halaman utama.</li>
      <li><strong>Data Gallery</strong>: Kelola gambar untuk galeri.</li>
      <li><strong>Tentang Saya</strong>: Ubah deskripsi di halaman About.</li>
    </ul>
  </main>

  <!-- Footer -->
  <footer class="bg-blue-800 text-white text-center py-4 mt-10">
    &copy; <?php echo date('Y'); ?> | Admin Panel - Faisal Mahfuzh
  </footer>

</body>
</html>
