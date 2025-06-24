<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id" class="">
<head>
  <meta charset="UTF-8">
  <title>About | Personal Web</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class',
    };
  </script>
   <script>
    document.addEventListener('DOMContentLoaded', () => {
      const isDark = localStorage.getItem('darkMode') === 'enabled';
      if (isDark) document.documentElement.classList.add('dark');
      document.getElementById('darkModeBtn').textContent = isDark ? '☀️ Light Mode' : '🌙 Dark Mode';
    });
    function toggleDarkMode() {
      const isDark = document.documentElement.classList.toggle('dark');
      localStorage.setItem('darkMode', isDark ? 'enabled' : 'disabled');
      document.getElementById('darkModeBtn').textContent = isDark ? '☀️ Light Mode' : '🌙 Dark Mode';
    }
  </script>

</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-100 min-h-screen transition-colors duration-300">

 <!-- Tombol Toggle -->
<div class="fixed top-4 right-4 z-50">
    <button onclick="toggleDarkMode()" id="darkModeBtn" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow">
      🌙 Dark Mode
    </button>
  </div>
  <!-- Header -->
  <header class="bg-blue-900 dark:bg-gray-800 text-white text-center p-6 text-2xl font-bold shadow-md">
    About Me | Faisal Mahfuzh
  </header>

  <!-- Navigasi -->
  <nav class="bg-blue-700 dark:bg-gray-700 text-white py-3 shadow-sm sticky top-0 z-40">
    <ul class="flex justify-center space-x-10 font-medium text-lg">
      <li><a href="index.php" class="hover:underline">Artikel</a></li>
      <li><a href="gallery.php" class="hover:underline">Gallery</a></li>
      <li><a href="about.php" class="underline font-semibold">About</a></li>
      <li><a href="admin/login.php" class="hover:underline">Login</a></li>
    </ul>
  </nav>

  <!-- Konten Utama -->
  <main class="max-w-3xl mx-auto p-6 mt-10">
    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 transition duration-300">
      <h2 class="text-2xl font-bold text-blue-800 dark:text-blue-300 mb-6 border-b pb-2">Tentang Saya</h2>
      
      <?php
      $sql = "SELECT * FROM tbl_about ORDER BY id_about DESC LIMIT 1";
      $query = mysqli_query($db, $sql);

      if (!$query) {
        echo "<p class='text-red-500 dark:text-red-400'>Terjadi kesalahan saat mengambil data.</p>";
      } elseif (mysqli_num_rows($query) > 0) {
        while ($data = mysqli_fetch_assoc($query)) {
          echo "
            <div class='flex flex-col sm:flex-row items-center gap-6'>
              <img src='images/Saya.jpg' alt='Foto Profil' class='w-36 h-36 rounded-full border-4 border-blue-700 dark:border-blue-400 shadow object-cover'>
              <p class='text-gray-700 dark:text-gray-200 leading-relaxed text-justify'>" . nl2br(htmlspecialchars($data['about'])) . "</p>
            </div>
          ";
        }
      } else {
        echo "<p class='text-red-500 dark:text-red-400'>Belum ada data tentang saya.</p>";
      }
      ?>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-blue-800 dark:bg-gray-800 text-white text-center py-4 mt-10 shadow-inner">
    &copy; <?php echo date('Y'); ?> | Created by Faisal Mahfuzh
  </footer>
</body>
</html>
