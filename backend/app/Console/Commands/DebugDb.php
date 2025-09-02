<?php
namespace App\Console\Commands;
use Illuminate\Console\Command;
class DebugDb extends Command {
    protected $signature = 'debug:db';
    protected $description = 'Dump database default connection and connections array';
    public function handle(): int {
        $default = config('database.default');
        $this->info('database.default = '.$default);
        $connections = config('database.connections');
        if (isset($connections[$default])) {
            $this->line('Selected connection config:');
            $this->line(print_r($connections[$default], true));
        } else {
            $this->error("No config found for connection '{$default}'");
        }
        return 0;
    }
}
