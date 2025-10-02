<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Data Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-100 to-indigo-200 min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-lg rounded-2xl w-full max-w-md p-8">
        <h2 class="text-2xl font-bold text-center text-indigo-700 mb-6">Form Input Data Mahasiswa</h2>
        
        <form action="#" method="post" class="space-y-4">
            @csrf
            <!-- NIM -->
            <div>
                <label for="nim" class="block text-gray-700 font-semibold mb-1">NIM</label>
                <input type="text" id="nim" name="nim" 
                       class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <!-- Nama -->
            <div>
                <label for="nama" class="block text-gray-700 font-semibold mb-1">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" 
                       class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <!-- Kelas -->
            <div>
                <label for="kelas" class="block text-gray-700 font-semibold mb-1">Kelas</label>
                <input type="text" id="kelas" name="kelas" 
                       class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <!-- Button -->
            <div class="flex justify-center">
                <button type="submit" 
                        class="bg-indigo-600 text-white px-5 py-2 rounded-lg hover:bg-indigo-700 transition-all">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</body>
</html>
