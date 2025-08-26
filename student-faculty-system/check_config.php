<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

function line($label, $value) {
    echo str_pad($label, 30).': '.var_export($value, true)."\n";
}

line('session.driver', config('session.driver'));
line('session.connection', config('session.connection'));
line('cache.default', config('cache.default'));
line('database.default', config('database.default'));
line('db.mysql.host', config('database.connections.mysql.host'));
line('db.mysql.database', config('database.connections.mysql.database'));
line('env SESSION_DRIVER', getenv('SESSION_DRIVER'));
line('env SESSION_CONNECTION', getenv('SESSION_CONNECTION'));
line('env DB_CONNECTION', getenv('DB_CONNECTION'));
