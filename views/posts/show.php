<?php require_once '../views/layout/header.php'; ?>

<div class="max-w-4xl mx-auto bg-white rounded-xl shadow-md overflow-hidden">
    <?php if(!empty($post['image_url'])): ?>
        <img src="<?php echo $post['image_url']; ?>" alt="<?php echo $post['title']; ?>" class="w-full h-64 object-cover">
    <?php endif; ?>

    <div class="p-8">
        <div class="flex items-center justify-between mb-6">
             <span class="bg-blue-100 text-blue-800 text-sm px-3 py-1 rounded-full font-semibold">
                <?php echo $post['category_name'] ?? 'General'; ?>
            </span>
            <span class="text-gray-500 text-sm"><?php echo $post['created_at']; ?></span>
        </div>

        <h1 class="text-3xl font-bold text-gray-900 mb-4"><?php echo $post['title']; ?></h1>
        
        <div class="prose max-w-none text-gray-700 leading-relaxed mb-8">
            <?php echo nl2br($post['content']); ?>
        </div>

        <hr class="my-6">
        
        <div class="flex items-center">
            <div class="bg-gray-200 rounded-full h-10 w-10 flex items-center justify-center text-gray-600 font-bold">
                <?php echo strtoupper(substr($post['username'] ?? 'A', 0, 1)); ?>
            </div>
            <div class="ml-4">
                <p class="text-sm font-medium text-gray-900">Publicado por <?php echo $post['username'] ?? 'Anónimo'; ?></p>
            </div>
        </div>

        <div class="mt-8">
            <a href="index.php?url=home" class="text-blue-600 hover:underline">&larr; Volver al inicio</a>
        </div>
    </div>
</div>

<?php require_once '../views/layout/footer.php'; ?>
