<?php declare(strict_types=1);

$router->get('/api', function() {
    $pastes = get_pastes();
    echo res_json($pastes);
});