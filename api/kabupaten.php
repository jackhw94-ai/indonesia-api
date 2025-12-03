<?php
header('Content-Type: application/json; charset=utf-8');

$path = __DIR__ . '/kabupaten.json';

if (!file_exists($path)) {
    echo json_encode([
        'status' => false,
        'message' => 'File kabupaten.json tidak ditemukan'
    ]);
    exit;
}

$json = file_get_contents($path);
$data = json_decode($json, true);

echo json_encode([
    'status' => true,
    'total' => count($data),
    'data' => $data
], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
