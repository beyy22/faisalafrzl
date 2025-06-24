<?php
include "koneksi.php";

// Konfigurasi pagination
$per_page = 4; // Jumlah artikel per halaman
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int) $_GET['page'] : 1;
$offset = ($page - 1) * $per_page;

// Proses pencarian
$keyword = '';
$where = '1';
if (isset($_GET['search'])) {
    $keyword = mysqli_real_escape_string($db, $_GET['search']);
    $where = "nama_artikel LIKE '%$keyword%' OR isi_artikel LIKE '%$keyword%'";
}

// Query artikel
$sql = "SELECT * FROM tbl_artikel WHERE $where ORDER BY id_artikel DESC LIMIT $per_page OFFSET $offset";
$query = mysqli_query($db, $sql);
if (!$query) {
    die("Query error: " . mysqli_error($db));
}

// Hitung total halaman
$count_sql = "SELECT COUNT(*) as total FROM tbl_artikel WHERE $where";
$count_result = mysqli_query($db, $count_sql);
$total_rows = mysqli_fetch_assoc($count_result)['total'];
$total_pages = ceil($total_rows / $per_page);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Personal Web | Home</title>
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
  <header class="bg-blue-900 dark:bg-gray-800 text-white text-center p-6 text-2xl font-bold">
    Personal Web | Faisal Mahfuzh
  </header>
  <nav class="bg-blue-700 dark:bg-gray-700 text-white py-3 shadow-sm sticky top-0 z-40">
    <ul class="flex justify-center space-x-10 font-medium text-lg">
      <li><a href="index.php" class="hover:underline">Artikel</a></li>
      <li><a href="gallery.php" class="hover:underline">Gallery</a></li>
      <li><a href="about.php" class="hover:underline">About</a></li>
      <li><a href="admin/login.php" class="hover:underline">Login</a></li>
    </ul>
  </nav>
  <div class="p-6 flex justify-center">
    <form action="" method="get" class="w-full max-w-xl flex gap-2">
      <input type="text" name="search" placeholder="Cari artikel..." value="<?= htmlspecialchars($keyword) ?>" class="w-full px-4 py-2 rounded border dark:bg-gray-800 dark:text-white">
      <button type="submit" class="bg-blue-600 dark:bg-gray-800 hover:bg-blue-700 text-white px-4 py-2 rounded">Cari</button>
    </form>
  </div>
  <main class="p-6 grid gap-4 max-w-4xl mx-auto">
    <?php if (mysqli_num_rows($query) > 0): ?>
      <?php while ($row = mysqli_fetch_assoc($query)) : ?>
        <article class="bg-white dark:bg-gray-800 rounded shadow p-4 transition">
          <h2 class="text-xl font-semibold text-blue-800 dark:text-blue-400">
            <?= htmlspecialchars($row['nama_artikel']) ?>
          </h2>
          <p class="text-sm text-gray-600 dark:text-gray-300 mt-1">
            <?= nl2br(htmlspecialchars(substr($row['isi_artikel'], 0, 200))) ?>...
          </p>
          <div class="mt-2">
            <a href="detail_artikel.php?id=<?= urlencode($row['id_artikel']) ?>" class="text-blue-600 hover:underline">Baca Selengkapnya</a>
          </div>
        </article>
      <?php endwhile; ?>
    <?php else: ?>
      <p class="text-center text-gray-500 dark:text-gray-400">Tidak ada artikel ditemukan.</p>
    <?php endif; ?>

    <!-- Pagination -->
    <?php if ($total_pages > 1): ?>
      <nav class="mt-6 flex justify-center space-x-2">
        <?php if ($page > 1): ?>
          <a href="?search=<?= urlencode($keyword) ?>&page=<?= $page - 1 ?>" class="px-3 py-1 bg-gray-200 dark:bg-gray-700 rounded hover:bg-gray-300">←</a>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $total_pages; $i++): ?>
          <a href="?search=<?= urlencode($keyword) ?>&page=<?= $i ?>" class="px-3 py-1 rounded <?= $i == $page ? 'bg-blue-600 text-white' : 'bg-gray-200 dark:bg-gray-700 hover:bg-gray-300' ?>"> <?= $i ?> </a>
        <?php endfor; ?>

        <?php if ($page < $total_pages): ?>
          <a href="?search=<?= urlencode($keyword) ?>&page=<?= $page + 1 ?>" class="px-3 py-1 bg-gray-200 dark:bg-gray-700 rounded hover:bg-gray-300">→</a>
        <?php endif; ?>
      </nav>
    <?php endif; ?>
  </main>
  <!-- Footer -->
  <footer class="bg-blue-800 dark:bg-gray-800 text-white text-center py-4 mt-10 shadow-inner">
    &copy; <?php echo date('Y'); ?> | Created by Faisal Mahfuzh
  </footer>
</body>
</body>
</html>
