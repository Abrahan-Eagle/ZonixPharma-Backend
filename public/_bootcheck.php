<?php
/**
 * Diagnóstico temporal de arranque Laravel (Namecheap). Borrar tras arreglar el 500.
 * GET /_bootcheck.php
 */
header('Content-Type: text/plain; charset=utf-8');
error_reporting(E_ALL);
ini_set('display_errors', '1');

try {
    $autoload = __DIR__ . '/../vendor/autoload.php';
    if (! is_file($autoload)) {
        throw new RuntimeException('Falta vendor/autoload.php — FTP/vendor incompleto');
    }
    require $autoload;

    $app = require __DIR__ . '/../bootstrap/app.php';
    /** @var \Illuminate\Contracts\Console\Kernel $kernel */
    $kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
    $kernel->bootstrap();

    echo "bootstrap=OK\n";
    echo 'app_env=' . config('app.env') . "\n";
    echo 'app_debug=' . (config('app.debug') ? 'true' : 'false') . "\n";
    echo 'app_url=' . config('app.url') . "\n";
    echo 'app_key=' . (config('app.key') ? 'set' : 'MISSING') . "\n";
    echo 'db=' . config('database.default') . '/' . config('database.connections.mysql.database') . "\n";

    try {
        \Illuminate\Support\Facades\DB::connection()->getPdo();
        echo "db_pdo=OK\n";
    } catch (Throwable $e) {
        echo 'db_pdo=FAIL ' . $e->getMessage() . "\n";
    }

    $req = Illuminate\Http\Request::create('/api/ping', 'GET');
    /** @var \Illuminate\Contracts\Http\Kernel $http */
    $http = $app->make(Illuminate\Contracts\Http\Kernel::class);
    $res = $http->handle($req);
    echo 'ping_status=' . $res->getStatusCode() . "\n";
    echo 'ping_body=' . $res->getContent() . "\n";
    $http->terminate($req, $res);
} catch (Throwable $e) {
    echo 'FATAL ' . get_class($e) . ': ' . $e->getMessage() . "\n";
    echo $e->getFile() . ':' . $e->getLine() . "\n";
    echo $e->getTraceAsString() . "\n";
    http_response_code(500);
}
