<?php

$publicPath = __DIR__ . '/public';
$requestedPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$resolvedPath = realpath($publicPath . $requestedPath);

if ($requestedPath !== '/' && $resolvedPath !== false && str_starts_with($resolvedPath, realpath($publicPath))) {
    return false;
}

$_SERVER['SCRIPT_NAME'] = '/index.php';

require $publicPath . '/index.php';
