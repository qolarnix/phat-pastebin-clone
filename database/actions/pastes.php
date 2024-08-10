<?php declare(strict_types=1);

use Illuminate\Database\Capsule\Manager;


function paste_transformer(object $args): array {
    $paste_data = [
        'id' => $args->id,
        'uuid' => $args->uuid,
        'content' => $args->content,
        'permalink' => '/paste/'.$args->uuid.'/',
    ];
    return $paste_data;
}

function paste_create(array $paste_data) {
    try {
        $paste_uuid = $paste_data['uuid'];

        Manager::table('pastes')->updateOrInsert(
            ['uuid' => $paste_uuid],
            $paste_data
        );
    }
    catch(Exception $e) {
        throw new Exception('Unable to create new paste' . $e);
    }
}

function paste_by_uuid(string $uuid) {
    $paste = Manager::table('pastes')->where('uuid', $uuid)->first();
    if($paste) {
        return paste_transformer($paste);
    }
    else {
        return false;
    }
}

function get_pastes(int $amount = -1) {
    $pastes = Manager::table('pastes')->take($amount)->get();

    $requested = [];
    foreach($pastes as $paste) {
        $request = paste_transformer($paste);
        $requested[] = $request;
    }

    return $requested;
}