<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="data:image/x-icon;," type="image/x-icon"> 

    <title><?php echo $title ?? 'Website title'; ?></title>
    <meta name="description" content="<?php echo $desc ?? 'Website description'; ?>">

    <link rel="stylesheet" href="/../assets/styles/dist.css">
    <script src="/../assets/scripts/htmx.js"></script>
    <script src="/../assets/scripts/scripts.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;500;700&display=swap" rel="stylesheet">
</head>
<body class="subpixel-antialiased bg-neutral-900 text-neutral-100">
    
    <header class="py-6 px-6 bg-neutral-800">
        <div class="mx-auto max-w-7xl">
            <div class="flex items-center justify-between">

                <div class="select-none" hx-boost="true">
                    <a href="/">
                        <span class="text-3xl font-bold">phpbin</span>
                    </a>
                </div>
                
            </div>
        </div>
    </header>