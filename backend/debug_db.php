<?php
require __DIR__.'/vendor/autoload.php';
$app = require __DIR__.'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class);

echo "env(DB_CONNECTION)=".env('DB_CONNECTION').PHP_EOL;
$default = config('database.default');
echo "config(database.default)=$default".PHP_EOL;
$connections = config('database.connections');
if (isset($connections[$default])) {
    echo "Resolved connection config:".PHP_EOL;
    print_r($connections[$default]);
} else {
    echo "No connection array found for name '$default'".PHP_EOL;
}
