<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex">

  <!-- Sidebar -->
  <aside class="w-64 bg-blue-800 text-white min-h-screen">
    <div class="p-6 font-bold text-2xl border-b border-blue-700">
      Admin Panel
    </div>
    <nav class="p-4">
      <a href="/dashboard" class="block py-2 px-4 rounded hover:bg-blue-700">Dashboard</a>
      <a href="/about" class="block py-2 px-4 rounded hover:bg-blue-700">About</a>
      <a href="/contact" class="block py-2 px-4 rounded hover:bg-blue-700">Contact</a>
      <a href="/" class="block py-2 px-4 rounded hover:bg-blue-700">Home</a>
    </nav>
  </aside>

  <!-- Main Content -->
  <div class="flex-1 flex flex-col">
    <!-- Navbar -->
    <header class="bg-white shadow p-4 flex justify-between items-center">
      <h1 class="text-xl font-bold">Dashboard</h1>
      <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Logout</button>
    </header>

    <!-- Content -->
    <main class="p-6">
      <h2 class="text-2xl font-semibold mb-4">Data Produk</h2>

      <!-- Tombol Tambah -->
      <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded mb-4 inline-block hover:bg-blue-700">
        + Tambah Produk
      </a>

      <!-- Tabel -->
      <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="w-full text-left border-collapse">
          <thead class="bg-gray-100">
            <tr>
              <th class="p-3 border">#</th>
              <th class="p-3 border">Nama Produk</th>
              <th class="p-3 border">Harga</th>
              <th class="p-3 border">Stok</th>
              <th class="p-3 border text-center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="p-3 border">1</td>
              <td class="p-3 border">Laptop ASUS</td>
              <td class="p-3 border">Rp 10.000.000</td>
              <td class="p-3 border">5</td>
              <td class="p-3 border text-center">
                <a href="#" class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600">Edit</a>
                <a href="#" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Hapus</a>
              </td>
            </tr>
            <tr>
              <td class="p-3 border">2</td>
              <td class="p-3 border">HP iPhone</td>
              <td class="p-3 border">Rp 15.000.000</td>
              <td class="p-3 border">8</td>
              <td class="p-3 border text-center">
                <a href="#" class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600">Edit</a>
                <a href="#" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Hapus</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</body>
</html>
