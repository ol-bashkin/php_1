<?php
require_once('../config.php');

$route = (isset($_GET['route'])) ? $_GET['route'] : 'main';

renderPage(
    $route,
    [
        $_GET['id']
    ]
);
