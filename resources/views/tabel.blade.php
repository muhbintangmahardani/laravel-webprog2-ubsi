<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col items-center py-10">
    <h2 class="text-2xl font-bold text-indigo-700 mb-6">Data Mahasiswa</h2>
    
    <div class="overflow-x-auto shadow-lg rounded-lg w-3/4">
        <table class="min-w-full bg-white rounded-lg">
            <thead class="bg-indigo-600 text-white">
                <tr>
                    <th class="py-3 px-4 text-left">No</th>
                    <th class="py-3 px-4 text-left">NIM</th>
                    <th class="py-3 px-4 text-left">Nama</th>
                    <th class="py-3 px-4 text-left">Kelas</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach($mahasiswa as $mhs)
                <tr class="hover:bg-indigo-50 transition">
                    <td class="py-2 px-4">{{ $mhs['no'] }}</td>
                    <td class="py-2 px-4">{{ $mhs['nim'] }}</td>
                    <td class="py-2 px-4">{{ $mhs['nama'] }}</td>
                    <td class="py-2 px-4">{{ $mhs['kelas'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
