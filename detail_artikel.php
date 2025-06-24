<?php
include "koneksi.php";

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "<p>Artikel tidak ditemukan.</p>";
    exit;
}

$id = intval($_GET['id']);
$sql = "SELECT * FROM tbl_artikel WHERE id_artikel = $id";
$query = mysqli_query($db, $sql);

if (!$query || mysqli_num_rows($query) == 0) {
    echo "<p>Artikel tidak tersedia.</p>";
    exit;
}

$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title><?= htmlspecialchars($data['nama_artikel']) ?> | Detail Artikel</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class',
    };
  </script>
  <script>
    // Terapkan preferensi dark mode saat halaman dimuat
    if (localStorage.getItem('darkMode') === 'enabled') {
      document.documentElement.classList.add('dark');
    }
  </script>
  <style>
    .justify-text {
      text-align: justify;
      line-height: 1.8;
    }

    .justify-text::first-letter {
      font-size: 1.8rem;
      font-weight: bold;
      color: #60a5fa;
      float: left;
      margin-right: 8px;
      line-height: 1;
    }
  </style>
</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-100 font-sans transition-colors duration-300">

  <header class="bg-blue-900 dark:bg-gray-700 text-white text-center p-6 text-2xl font-bold">
    Detail Artikel
  </header>

  <main class="max-w-3xl mx-auto p-6 mt-6 bg-white dark:bg-gray-800 rounded shadow transition">
    <h1 class="text-xl font-semibold text-blue-800 dark:text-blue-400 mb-4">
      <?= htmlspecialchars($data['nama_artikel']) ?>
    </h1>

    <p class="justify-text">
      <?= nl2br(htmlspecialchars($data['isi_artikel'])) ?>
    </p>

    <div class="mt-6">
      <a href="index.php" class="text-blue-600 dark:text-blue-400 hover:underline">
        &larr; Kembali ke Beranda
      </a>
    </div>
  </main>

</body>
</html>
