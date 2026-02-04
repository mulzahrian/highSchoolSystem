<?php
/**
 * ---------------------------------------------------------------
 * CI4 Root Index Bridge
 * ---------------------------------------------------------------
 * File ini berfungsi sebagai jembatan dari public_html
 * ke public/index.php milik CodeIgniter 4
 */

// Lokasi folder public CI4
$publicPath = __DIR__ . '/public';

// Validasi folder public
if (!is_dir($publicPath)) {
    http_response_code(500);
    echo 'CI4 public folder not found.';
    exit;
}

// Set working directory ke folder public
chdir($publicPath);

// Definisikan FCPATH ulang
define('FCPATH', $publicPath . DIRECTORY_SEPARATOR);

// Jalankan CI4 front controller
require FCPATH . 'index.php';
