<?php
include('../koneksi.php');
session_start();

// Cek sesi login
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

// Validasi ID artikel
if (!isset($_GET['id_artikel']) || !is_numeric($_GET['id_artikel'])) {
    echo "<p>Artikel tidak ditemukan.</p>";
    exit;
}

$id = intval($_GET['id_artikel']);
$sql = "SELECT * FROM tbl_artikel WHERE id_artikel = $id";
$query = mysqli_query($db, $sql);

if (!$query || mysqli_num_rows($query) === 0) {
    echo "<p>Artikel tidak tersedia.</p>";
    exit;
}

$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Artikel</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

  <!-- Header -->
  <header class="bg-blue-900 text-white text-center py-6 shadow">
    <h1 class="text-3xl font-bold">Edit Artikel</h1>
  </header>

  <div class="flex max-w-7xl mx-auto mt-8 px-4">
    <!-- Sidebar -->
    <aside class="w-1/4 bg-white rounded shadow p-4">
      <h2 class="text-xl font-semibold text-blue-700 mb-4 text-center">MENU</h2>
      <ul class="space-y-2 text-gray-700">
        <li><a href="beranda_login.php" class="block hover:text-blue-600">Beranda</a></li>
        <li><a href="data_artikel.php" class="block font-semibold text-blue-800">Kelola Artikel</a></li>
        <li><a href="data_gallery.php" class="block hover:text-blue-600">Kelola Gallery</a></li>
        <li><a href="data_about.php" class="block hover:text-blue-600">About</a></li>
        <li><a href="logout.php" onclick="return confirm('Yakin ingin logout?')" class="block text-red-600 hover:underline font-medium">Logout</a></li>
      </ul>
    </aside>

    <!-- Form Edit Artikel -->
    <main class="w-3/4 bg-white rounded shadow p-6 ml-6">
      <form action="proses_edit_artikel.php" method="post" class="space-y-6">
        <input type="hidden" name="id_artikel" value="<?= $data['id_artikel'] ?>">

        <div>
          <label for="nama_artikel" class="block text-sm font-medium text-gray-700 mb-1">Judul Artikel</label>
          <input type="text" id="nama_artikel" name="nama_artikel" required value="<?= htmlspecialchars($data['nama_artikel']) ?>" class="w-full p-2 border rounded focus:outline-none focus:ring focus:border-blue-500">
        </div>

        <div>
          <label for="isi_artikel" class="block text-sm font-medium text-gray-700 mb-1">Isi Artikel</label>
          <textarea id="isi_artikel" name="isi_artikel" rows="10" required class="w-full p-2 border rounded focus:outline-none focus:ring focus:border-blue-500"><?= htmlspecialchars($data['isi_artikel']) ?></textarea>
        </div>

        <div class="text-right">
          <button type="submit" class="bg-blue-700 text-white px-6 py-2 rounded hover:bg-blue-800">Simpan Perubahan</button>
        </div>
      </form>
    </main>
  </div>

</body>
</html>
