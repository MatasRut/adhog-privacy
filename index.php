<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '' :
        require __DIR__ . '/index.php';
        break;
    case '/privacy-policy' :
        require __DIR__ . '/privacy-policy.php';
        break;
    case '/support' :
        require __DIR__ . '/support.php';
        break;
    default:
        http_response_code(404);
        break;
}
?>
