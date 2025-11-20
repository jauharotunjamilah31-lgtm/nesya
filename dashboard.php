<?php
session_start();
if (!isset($_SESSION['user'])) {
  header("Location: index.php");
  exit;
}
$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard - Music App</title>
  <link href="css/output.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white">
  <nav class="bg-gray-800 p-4 flex justify-between items-center">
    <h1 class="text-xl font-bold">🎧 Music App</h1>
    <div>
      <span class="mr-4">Halo, <?= htmlspecialchars($user['username']); ?>!</span>
      <a href="../src/auth.php?logout=true" class="bg-red-600 hover:bg-red-700 px-3 py-1 rounded">Logout</a>
    </div>
  </nav>

  <main class="p-6">
    <h2 class="text-2xl font-semibold mb-4">Playlist Anda</h2>

    <!-- Contoh musik player sederhana -->
    <div class="bg-gray-800 p-4 rounded-lg">
      <p class="mb-2 font-semibold">Lagu Contoh - Artist</p>
      <audio controls class="w-full">
        <source src="assets/sample.mp3" type="audio/mpeg">
        Browser Anda tidak mendukung pemutar audio.
      </audio>
    </div>
  </main>
</body>
</html>
