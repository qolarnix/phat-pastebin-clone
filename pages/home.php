<?php declare(strict_types=1);

echo $view->render('header', [
    'title' => 'phpbin || create a new bin'
]);

$recent_pastes = get_pastes(5);
?>

<section class="py-12 px-6">
    <div class="mx-auto max-w-7xl">

        <div class="grid grid-cols-1 md:grid-cols-6 lg:grid-cols-4 gap-6">
            <div class="md:col-span-4 lg:col-span-3">
                <h4 class="font-bold text-lg mb-6">New paste</h4>

                <?php echo $view->render('paste-form'); ?>
            </div>

            <div class="md:col-span-2 lg:col-span-1" hx-boost="true">
                <h4 class="font-bold text-lg mb-6">Recent pastes</h4>

                <?php if($recent_pastes): ?>
                    <?php foreach($recent_pastes as $rp): $rp = (object)$rp; ?>
                        <a href="<?php echo $rp->permalink; ?>" class="flex flex-col gap-1 mb-4">
                            <p class="font-bold text-sm flex gap-1 items-center">
                                <span class="text-teal-600">-</span>
                                <span>Anonymous</span>
                            </p>
                            <p class="text-xs text-neutral-400">
                                <?php echo $view->escape(get_excerpt($rp->content, 75)); ?>
                            </p>
                        </a>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="text-neutral-400 text-sm">No recent pastes to show</p>
                <?php endif; ?>

                <a href="/all/" class="flex mt-6 text-xs underline text-neutral-400">All pastes</a>
            </div>
        </div>

    </div>
</section>



<?php
echo $view->render('footer');