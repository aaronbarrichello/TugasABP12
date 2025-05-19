<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <h1 class="text-2xl font-bold mb-6 text-center">Home</h1>
        
        <div class="mb-6 text-center">
            <p class="text-lg">Selamat datang, <span class="font-bold">{{ $user->name }}</span>!</p>
        </div>
        
        <a href="/logout" class="block w-full bg-red-500 text-white py-2 rounded-lg hover:bg-red-600 text-center">Logout</a>
    </div>
</body>
</html>
