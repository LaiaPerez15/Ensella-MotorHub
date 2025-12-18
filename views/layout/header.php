<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotorHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom tweaks if needed */
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">
    <nav class="bg-blue-900 text-white shadow-lg">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="index.php?url=home" class="text-2xl font-bold tracking-tight hover:text-blue-200">MotorHub</a>
            <div class="space-x-4">
                <a href="index.php?url=home" class="hover:text-blue-300">Inicio</a>
                <a href="#" class="hover:text-blue-300">Marcas</a>
                <a href="#" class="hover:text-blue-300">Talleres</a>
                <a href="#" class="hover:text-blue-300">Eventos</a>
                <a href="index.php?url=login" class="bg-white text-blue-900 px-4 py-2 rounded-lg hover:bg-gray-200 transition">Login</a>
                <a href="index.php?url=register" class="border border-white px-4 py-2 rounded-lg hover:bg-blue-800 transition">Registro</a>
            </div>
        </div>
    </nav>
    <main class="container mx-auto px-6 py-8 flex-grow">
