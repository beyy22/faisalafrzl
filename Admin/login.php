<?php
session_start();
if (isset($_SESSION['username'])) {
  header('Location: beranda_login.php');
}
require_once("../koneksi.php");
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login Admin</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-blue-100">
  <div class="bg-white p-6 rounded shadow-md w-full max-w-sm">
    <h2 class="text-center text-xl font-bold mb-4 text-blue-700">Login Admin</h2>
    <form action="cek_login.php" method="post">
      <div class="mb-4">
        <label class="block mb-1">Username</label>
        <input type="text" name="username" required class="w-full border px-3 py-2 rounded">
      </div>
      <div class="mb-4">
        <label class="block mb-1">Password</label>
        <input type="password" name="password" required class="w-full border px-3 py-2 rounded">
      </div>
      <div class="flex justify-between">
        <input type="submit" value="Login" class="bg-blue-700 text-white px-4 py-2 rounded">
        <input type="reset" value="Reset" class="bg-gray-300 px-4 py-2 rounded">
      </div>
    </form>
  </div>
</body>
</html>
