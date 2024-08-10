<?php declare(strict_types=1);

$router->get('/', function() use($template) {
    echo $template->render('home');
});

$router->get('/paste/{uuid}', function($uuid) use($template, $router) {
    $paste = paste_by_uuid($uuid);

    if($paste == false) {
        $router->trigger404();
        return;
    }

    echo $template->render('single-paste', [
        'uuid' => $uuid
    ]);
});

$router->post('upload', function() {
    if("" == trim($_POST['pasteContent'])) {
        header('Location: ' . '/');
        return;
    }
    else {
        $content = $_POST['pasteContent'];
    }
    
    $new_uuid = uuidv4();

    $new_paste = [
        'uuid' => $new_uuid,
        'content' => $content,
    ];

    $new_paste_url = '/paste/' . $new_uuid . '/';

    paste_create($new_paste);

    header('Location: ' . $new_paste_url);
});