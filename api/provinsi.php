<?php
header('Content-Type: application/json; charset=utf-8');

// Path file JSON
$path = 'https://github.com/jackhw94-ai/indonesia-api/blob/main/api/provinsi/provinsi.json';

if (!file_exists($path)) {
    echo json_encode([
        'status' => false,
        'message' => 'File provinsi.json tidak ditemukan'
    ]);
    exit;
}

// Baca file JSON
$json = file_get_contents($path);
$data = json_decode($json, true);

echo json_encode([
    'status' => true,
    'total' => count($data),
    'data' => $data
], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

