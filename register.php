<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Register - Music App</title>
  <link href="css/output.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-gray-900 via-gray-800 to-black text-white flex items-center justify-center min-h-screen font-sans">

  <!-- Card Container -->
  <div class="relative bg-gray-800/80 backdrop-blur-lg border border-gray-700 p-8 rounded-2xl shadow-2xl w-96 transition-all hover:shadow-green-500/10">
    
    <!-- Logo / Header -->
    <div class="text-center mb-6">
      <div class="inline-flex items-center justify-center w-12 h-12 bg-green-500 rounded-full mb-3 shadow-lg shadow-green-500/30">
        🎵
      </div>
      <h2 class="text-2xl font-bold tracking-wide">Daftar Akun</h2>
      <p class="text-gray-400 text-sm">Bergabung dan nikmati musik favoritmu!</p>
    </div>

    <!-- Form Register -->
    <form action="../src/auth.php" method="POST" class="space-y-5">
      <div>
        <label class="block text-gray-300 mb-1 text-sm font-medium">Username</label>
        <input type="text" name="username" placeholder="Masukkan username" required
          class="w-full p-2.5 rounded-lg bg-gray-900 border border-gray-700 text-gray-100 focus:ring-2 focus:ring-green-500 focus:border-transparent transition">
      </div>

      <div>
        <label class="block text-gray-300 mb-1 text-sm font-medium">Email</label>
        <input type="email" name="email" placeholder="Masukkan email" required
          class="w-full p-2.5 rounded-lg bg-gray-900 border border-gray-700 text-gray-100 focus:ring-2 focus:ring-green-500 focus:border-transparent transition">
      </div>

      <div>
        <label class="block text-gray-300 mb-1 text-sm font-medium">Password</label>
        <input type="password" name="password" placeholder="Masukkan password" required
          class="w-full p-2.5 rounded-lg bg-gray-900 border border-gray-700 text-gray-100 focus:ring-2 focus:ring-green-500 focus:border-transparent transition">
      </div>

      <!-- Tombol Daftar -->
      <button type="submit" name="register"
        class="w-full py-2.5 mt-2 rounded-lg font-semibold bg-green-600 hover:bg-green-500 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-green-400">
        Daftar Sekarang
      </button>
    </form>

    <!-- Link ke Login -->
    <p class="mt-6 text-center text-sm text-gray-400">
      Sudah punya akun?
      <a href="index.php" class="text-green-400 hover:text-green-300 font-medium transition">Login di sini</a>
    </p>

    <!-- Hiasan Latar -->
    <div class="absolute -top-10 -left-10 w-24 h-24 bg-green-500/10 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-10 -right-10 w-24 h-24 bg-blue-500/10 rounded-full blur-3xl"></div>

  </div>

</body>
</html>
