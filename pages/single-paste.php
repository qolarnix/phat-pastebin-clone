<?php declare(strict_types=1);

$paste = paste_by_uuid($uuid);
$paste = (object)$paste;

echo $view->render('header', [
    'title' => 'PHPBin || Paste by Anonymous'
]);
?>

<section class="py-12 px-6">
    <div class="mx-auto max-w-7xl">

        <div class="flex items-center gap-6 mb-12">
            <h1 class="text-3xl font-bold">
                <span>Paste by Anonymous</span>
            </h1>
            <p class="text-3xl font-bold text-neutral-400">
                <?php echo $view->escape($paste->created_at); ?>
            </p>
        </div>

        <textarea 
            class="w-full rounded bg-neutral-800 border border-neutral-600 focus:ring-teal-600 focus:border-teal-600" 
            id="pasteContent" 
            rows="24" 
            readonly
        ><?php echo $view->escape($paste->content); ?></textarea>

        <button onclick="copyPlaintext()" class="py-2 px-4 bg-teal-600 rounded mt-6 hover:bg-teal-500 flex items-center gap-1">
            <ion-icon name="clipboard"></ion-icon>    
            <span>Copy plaintext</span>
        </button>

    </div>
</section>

<?php
echo $view->render('footer');