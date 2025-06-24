<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Gallery | Personal Web</title>
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
<body class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-100 font-sans transition-colors duration-300">

  <div class="fixed top-4 right-4 z-50">
    <button onclick="toggleDarkMode()" id="darkModeBtn" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow">
      🌙 Dark Mode
    </button>
  </div>
  <!-- Header -->
  <header class="bg-blue-900 dark:bg-gray-800 text-white text-center p-6 text-2xl font-bold">
    Gallery | Faisal Mahfuzh
  </header>

  <!-- Navigasi -->
  <nav class="bg-blue-700 dark:bg-gray-700 text-white py-3">
    <ul class="flex justify-center space-x-10 font-medium text-lg">
      <li><a href="index.php" class="hover:underline">Artikel</a></li>
      <li><a href="gallery.php" class="hover:underline">Gallery</a></li>
      <li><a href="about.php" class="hover:underline">About</a></li>
      <li><a href="admin/login.php" class="hover:underline">Login</a></li>
    </ul>
  </nav>

  <!-- Galeri -->
  <main class="max-w-6xl mx-auto p-6">
    <h2 class="text-xl font-bold mb-6 text-center">Galeri Foto</h2>

    <div class="columns-1 sm:columns-2 md:columns-3 gap-4 space-y-4">
      <?php
      $sql = "SELECT * FROM tbl_gallery ORDER BY id_gallery DESC";
      $query = mysqli_query($db, $sql);
      $images = [];
      while ($data = mysqli_fetch_array($query)) {
        $images[] = $data;
      }

      foreach ($images as $index => $data) {
        echo "<div class='break-inside-avoid bg-white dark:bg-gray-800 rounded-lg shadow overflow-hidden'>";
        echo "<img src='images/{$data['foto']}' 
                  onclick='openModal({$index})' 
                  class='w-full h-auto object-cover cursor-pointer transition-transform duration-300 hover:scale-105' 
                  alt='Gambar'>";
        echo "<div class='p-3'><h3 class='text-base font-semibold text-blue-700 dark:text-gray-300'>" . htmlspecialchars($data['judul']) . "</h3></div>";
        echo "</div>";
      }
      ?>
    </div>
  </main>

  <!-- Modal -->
  <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center z-50 hidden">
    <div class="relative max-w-4xl max-h-[95vh] flex flex-col items-center px-4">
      <button onclick="closeModal()" class="absolute top-2 right-2 bg-white text-black rounded-full px-2 py-1 shadow">✕</button>
      
      <!-- Navigasi -->
      <button onclick="prevImage()" class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-white text-black rounded-full px-2 py-1 shadow">←</button>
      <button onclick="nextImage()" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-white text-black rounded-full px-2 py-1 shadow">→</button>

      <!-- Zoomable Image -->
      <div class="overflow-auto max-h-[80vh] mb-3">
        <img id="modalImage" src="" alt="Preview Gambar" class="max-w-full max-h-full rounded shadow-lg transition-transform duration-300 hover:scale-110">
      </div>
      
      <!-- Caption -->
      <p id="modalCaption" class="text-white text-center text-lg mt-1"></p>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-blue-800 dark:bg-gray-800 text-white text-center py-4 mt-10">
    &copy; <?php echo date('Y'); ?> | Created by Faisal Mahfuzh
  </footer>

  <!-- Script -->
  <script>
    const images = <?php echo json_encode($images); ?>;
    let currentIndex = 0;

    function openModal(index) {
      currentIndex = index;
      const img = images[index];
      document.getElementById('modalImage').src = 'images/' + img.foto;
      document.getElementById('modalCaption').textContent = img.judul;
      document.getElementById('imageModal').classList.remove('hidden');
    }

    function closeModal() {
      document.getElementById('imageModal').classList.add('hidden');
      document.getElementById('modalImage').src = '';
      document.getElementById('modalCaption').textContent = '';
    }

    function prevImage() {
      if (currentIndex > 0) {
        openModal(currentIndex - 1);
      }
    }

    function nextImage() {
      if (currentIndex < images.length - 1) {
        openModal(currentIndex + 1);
      }
    }
    // Tutup modal jika klik luar area
    document.getElementById('imageModal').addEventListener('click', function (e) {
      if (e.target === this) closeModal();
    });
  </script>
</body>
</html>
