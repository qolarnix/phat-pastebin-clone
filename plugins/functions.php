<?php declare(strict_types=1);

/**
 * JSON Response
 */
function res_json(array $input): string {
    header('Content-Type: application/json');

    $response = json_encode($input);
    return $response;
}

/**
 * Excerpt
 */
function get_excerpt(string $input, int $length, string $decor = '...'): string {
    $short = substr($input, 0, $length);
    $short = trim($short);

    $excerpt = $short . $decor;
    return $excerpt;
}

/**
 * UUID
 */
function uuidv4($data = null): string {
    $data = $data ?? random_bytes(16);
    assert(strlen($data) == 16);

    $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
    $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
}