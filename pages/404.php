<?php declare(strict_types=1);

echo $view->render('header', [
    'title' => 'phpbin || 404 not found',
]);

?>

<section class="py-12 px-6">
    <div class="mx-auto max-w-7xl">

        <div class="flex flex-col gap-4 items-center justify-center">
            <h1 class="font-bold text-3xl">
                404 Not Found
            </h1>
            <p class="text-neutral-400 text-center max-w-[300px] leading-relaxed">
                The content you are looking for may have been deleted, or doesn't exist.
            </p>

            <a href="/" class="py-2 px-4 bg-teal-600 rounded mt-6 hover:bg-teal-500">Create new paste</a>
        </div>

    </div>
</section>

<?php
echo $view->render('footer');