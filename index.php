<?php
session_start();
if (isset($_SESSION['user'])) {
    header("Location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login - Music App</title>
  <link href="css/output.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white flex items-center justify-center min-h-screen">
  <div class="bg-gray-800 p-8 rounded-lg shadow-lg w-96">
    <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
    <form action="../src/auth.php" method="POST" class="space-y-4">
      <input type="email" name="email" placeholder="Email" required class="w-full p-2 rounded bg-gray-700 border border-gray-600 focus:outline-none">
      <input type="password" name="password" placeholder="Password" required class="w-full p-2 rounded bg-gray-700 border border-gray-600 focus:outline-none">
      <button type="submit" name="login" class="w-full bg-blue-600 hover:bg-blue-700 py-2 rounded font-semibold">Masuk</button>
    </form>
    <p class="mt-4 text-center text-sm text-gray-400">Belum punya akun? <a href="register.php" class="text-blue-400 hover:underline">Daftar</a></p>
  </div>
</body>
</html>
