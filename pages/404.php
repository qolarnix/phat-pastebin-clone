<?php declare(strict_types=1);

echo $view->render('header', [
    'title' => 'phpbin || 404 not found',
]);

?>

<section class="py-12 px-6">
    <div class="mx-auto max-w-7xl">

        <div class="flex flex-col gap-4 items-center justify-center">
            <h1 class="font-bold text-3xl">404 Not Found</h1>
            <p class="text-neutral-400">
                This paste may have been deleted
            </p>
        </div>

    </div>
</section>

<?php
echo $view->render('footer');