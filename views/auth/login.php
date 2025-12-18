<?php require_once '../views/layout/header.php'; ?>

<div class="max-w-md mx-auto bg-white rounded-lg shadow-md p-8 mt-10">
    <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Iniciar Sesión</h2>
    
    <form action="index.php?url=login" method="POST">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="email" placeholder="tu@email.com" required>
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Contraseña</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" placeholder="******************" required>
        </div>
        <div class="flex items-center justify-between">
            <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full" type="submit">
                Entrar
            </button>
        </div>
        <p class="text-center text-gray-500 text-xs mt-4">
            ¿No tienes cuenta? <a href="index.php?url=register" class="text-blue-600 hover:underline">Regístrate</a>
        </p>
    </form>
</div>

<?php require_once '../views/layout/footer.php'; ?>
