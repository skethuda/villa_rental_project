<?php
require_once '../config/config.php';

// Yönlendirme
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch($page) {
    case 'home':
        include '../src/views/home.php';
        break;
    case 'villa':
        include '../src/views/villa.php';
        break;
    // Diğer sayfalar...
    default:
        include '../src/views/404.php';
        break;
}
?>