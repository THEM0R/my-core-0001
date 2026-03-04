<?php

require_once __DIR__ . '/protected/bootstrap.php';

if (!IS_POST() || !$_FILES) {
    stopAndResponseMessage('error', 'Только POST, FILES');
}

$files = convertFileInformation($_FILES);

if (!isset($files['file'])) {
    stopAndResponseMessage('error', 'Файл не загружался');
}

$file = $files['file'];

if ($file['error'] !== UPLOAD_ERR_OK) {
    stopAndResponseMessage('error', uploadCodeToMessage($file['error']));
}

$mimeType = guessMimeType($file['tmp_name']);
if (!$mimeType) {
    stopAndResponseMessage('error', 'Тип файла не распознался!');
}

$validMimeType = ['image/png', 'image/jpeg'];

if (!in_array($mimeType, $validMimeType)) {
    stopAndResponseMessage('error', 'Загружать можно только png и jpeg!');
}

$size = filesize($file['tmp_name']);
if ($size > 256 * 1024) {
    stopAndResponseMessage('error', 'Файл слишком большой!!');
}

$uploadDir = __DIR__ . '/files';
if (!is_writable($uploadDir)) {
    stopAndResponseMessage('error', 'Папка для файлов не доступна для записи.');
}

$filename = time() . '-' . mt_rand(0000, 9999) . '.' . guessFileExtension($mimeType);

if (!move_uploaded_file($file['tmp_name'], $uploadDir . '/' . $filename)) {
    stopAndResponseMessage('error', 'Файл не был перемецен!');
}

sendResponse('upload', ['url' => 'files/' . $filename]);


#
# if used php-fpm
#   * send response (finish request)
#   * clear old images (created >= 5 minutes ago)
#
if (!function_exists('fastcgi_finish_request'))
    exit;

fastcgi_finish_request();

clearOldFiles($uploadDir, '/*.{jpg,png,jpeg}', 5);