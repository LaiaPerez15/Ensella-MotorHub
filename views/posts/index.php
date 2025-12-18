<?php require_once '../views/layout/header.php'; ?>

<div class="text-center mb-12">
    <h1 class="text-4xl font-bold text-gray-900 mb-4">Bienvenido a MotorHub</h1>
    <p class="text-xl text-gray-600">La comunidad definitiva para los amantes del motor</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    <?php foreach($posts as $post): ?>
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
            <?php if(!empty($post['image_url'])): ?>
                <img src="<?php echo $post['image_url']; ?>" alt="<?php echo $post['title']; ?>" class="w-full h-48 object-cover">
            <?php else: ?>
                <div class="w-full h-48 bg-gray-300 flex items-center justify-center text-gray-500">Sin Imagen</div>
            <?php endif; ?>
            
            <div class="p-6">
                <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full uppercase font-semibold tracking-wide mb-2">
                    <?php echo $post['category_name'] ?? 'General'; ?>
                </span>
                <h2 class="text-xl font-bold mb-2"><?php echo $post['title']; ?></h2>
                <p class="text-gray-700 mb-4 line-clamp-3"><?php echo substr($post['content'], 0, 100) . '...'; ?></p>
                
                <div class="flex items-center justify-between mt-4">
                    <span class="text-sm text-gray-500">Por <?php echo $post['username'] ?? 'Anónimo'; ?></span>
                    <a href="index.php?url=post/<?php echo $post['id']; ?>" class="text-blue-600 hover:text-blue-800 font-medium">Ver más &rarr;</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php require_once '../views/layout/footer.php'; ?>
