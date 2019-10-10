<?php

session_start();

if (empty($_SESSION['locale']) && empty($_GET['hl'])) {
    $_SESSION['locale'] = 'ru';
} elseif (isset($_GET['hl'])) {
    $_SESSION['locale'] = $_GET['hl'];
}

$locale = $_SESSION['locale'];

require_once __DIR__ . "/store-{$locale}.php";
