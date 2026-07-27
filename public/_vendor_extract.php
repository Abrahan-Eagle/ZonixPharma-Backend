<?php

/**
 * Extrae vendor-bundle.tar.gz en la raíz Laravel (un solo uso post-FTP).
 * GET /_vendor_extract.php?t=<token en public/.extract-token>
 * Se auto-borra token + este script al terminar OK.
 */
header('Content-Type: text/plain; charset=utf-8');
error_reporting(E_ALL);
ini_set('display_errors', '1');
set_time_limit(600);
ini_set('memory_limit', '512M');

$root = dirname(__DIR__);
$tokenFile = __DIR__.'/.extract-token';
$bundle = $root.'/vendor-bundle.tar.gz';
$marker = $root.'/vendor/symfony/string/Resources/functions.php';

$given = $_GET['t'] ?? '';
$expected = is_file($tokenFile) ? trim((string) file_get_contents($tokenFile)) : '';
if ($expected === '' || ! hash_equals($expected, (string) $given)) {
    http_response_code(403);
    echo "FORBIDDEN\n";
    exit;
}

if (! is_file($bundle)) {
    http_response_code(404);
    echo "MISSING vendor-bundle.tar.gz\n";
    exit;
}

echo 'bundle='.basename($bundle).' size='.filesize($bundle)."\n";

$broken = $root.'/vendor.broken.'.date('YmdHis');
if (is_dir($root.'/vendor')) {
    rename($root.'/vendor', $broken);
    echo "renamed_old_vendor=$broken\n";
}

$cmd = 'tar -xzf '.escapeshellarg($bundle).' -C '.escapeshellarg($root).' 2>&1';
exec($cmd, $out, $code);
echo "tar_exit=$code\n";
if ($out) {
    echo implode("\n", array_slice($out, 0, 30))."\n";
}

if ($code !== 0 || ! is_file($marker)) {
    http_response_code(500);
    echo 'EXTRACT_FAILED marker_exists='.(is_file($marker) ? 'yes' : 'no')."\n";
    if (is_dir($broken) && ! is_dir($root.'/vendor')) {
        rename($broken, $root.'/vendor');
        echo "restored_old_vendor\n";
    }
    exit;
}

echo "symfony/string OK\n";

$autoload = $root.'/vendor/autoload.php';
if (! is_file($autoload)) {
    http_response_code(500);
    echo "MISSING vendor/autoload.php\n";
    exit;
}

try {
    require $autoload;
    $app = require $root.'/bootstrap/app.php';
    /** @var \Illuminate\Contracts\Console\Kernel $kernel */
    $kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
    $kernel->bootstrap();
    $kernel->call('optimize:clear');
    echo "optimize:clear OK\n";
    try {
        $kernel->call('storage:link');
        echo "storage:link OK\n";
    } catch (Throwable $e) {
        echo 'storage:link skip '.$e->getMessage()."\n";
    }
} catch (Throwable $e) {
    echo 'artisan_warn '.$e->getMessage()."\n";
}

@unlink($bundle);
@unlink($tokenFile);
@unlink(__FILE__);
echo "cleanup OK\n";
echo "DONE\n";
