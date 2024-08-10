<?php declare(strict_types=1);

$paste = paste_by_uuid($uuid);
$paste = (object)$paste;

echo $view->render('header', [
    'title' => 'phpbin || paste by anonymous'
]);
?>

<section class="py-12 px-6">
    <div class="mx-auto max-w-7xl">

        <h1 class="mb-12 text-3xl font-bold">
            Paste by Anonymous
        </h1>

        <textarea 
            class="w-full rounded bg-neutral-800 border border-neutral-600 focus:ring-teal-600 focus:border-teal-600" 
            rows="24" 
            readonly 
            onclick="this.select()"
        ><?php echo $view->escape($paste->content); ?></textarea>

    </div>
</section>

<?php
echo $view->render('footer');