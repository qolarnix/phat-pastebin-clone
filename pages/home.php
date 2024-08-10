<?php declare(strict_types=1);

echo $view->render('header', [
    'title' => 'PHPBin || Create new public paste'
]);

$recent_pastes = get_pastes(5);
?>

<section class="py-12 px-6">
    <div class="mx-auto max-w-7xl">

        <div class="grid grid-cols-1 md:grid-cols-6 lg:grid-cols-4 gap-12">
            <div class="md:col-span-4 lg:col-span-3">
                <h4 class="font-bold text-lg mb-6">
                    New public paste
                </h4>

                <?php echo $view->render('paste-form'); ?>
            </div>

            <div class="md:col-span-2 lg:col-span-1" hx-boost="true">
                <h4 class="font-bold text-lg mb-6">
                    Recent pastes
                </h4>

                <?php if($recent_pastes): ?>
                    <?php foreach($recent_pastes as $rp): $rp = (object)$rp; ?>
                        <a href="<?php echo $rp->permalink; ?>" class="flex flex-col gap-1 mb-4">
                            <p class="font-bold text-sm flex gap-1 items-center">
                                <ion-icon name="clipboard" class="text-base text-teal-600"></ion-icon>
                                <span>Anonymous</span>
                            </p>
                            <p class="text-xs text-neutral-400 break-words">
                                <?php echo $view->escape(get_excerpt($rp->content, 75)); ?>
                            </p>
                            <p class="text-xs text-neutral-400 flex gap-1 items-center">
                                <ion-icon name="time-outline"></ion-icon>
                                <?php echo $view->escape($rp->created_at); ?>
                            </p>
                        </a>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="text-neutral-400 text-sm">No recent pastes to show</p>
                <?php endif; ?>

                <a href="/all/" class="flex mt-6 text-xs text-neutral-400 flex items-center gap-1 hover:text-neutral-100">
                    <ion-icon name="eye-outline" class="text-base"></ion-icon>
                    <span>View all pastes</span>
                </a>
            </div>
        </div>

    </div>
</section>



<?php
echo $view->render('footer');