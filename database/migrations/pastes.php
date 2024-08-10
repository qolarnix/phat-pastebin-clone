<?php declare(strict_types=1);

require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../bootstrap.php';

use Illuminate\Database\Capsule\Manager;

Manager::schema()->drop('pastes');
Manager::schema()->create('pastes', function($t) {
    $t->increments('id');
    $t->string('uuid');
    $t->string('content');
    $t->timestamps();
});

// $faker = Faker\Factory::create();

// $pastes = [];
// for($i = 0; $i < 10; $i++) {
//     $paste = [
//         'uuid' => $faker->uuid(),
//         'content' => $faker->text()
//     ];
//     $pastes[] = $paste;
// }

// Manager::table('pastes')->insert($pastes);