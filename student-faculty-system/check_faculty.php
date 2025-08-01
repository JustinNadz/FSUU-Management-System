<?php

require_once 'vendor/autoload.php';

$app = require_once 'bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

$faculty = App\Faculty::with('user', 'department')->get();

echo "Total Faculty: " . $faculty->count() . "\n";
echo "Faculty List:\n";

foreach ($faculty as $f) {
    echo "ID: " . $f->faculty_id . 
         ", Name: " . $f->user->first_name . " " . $f->user->last_name . 
         ", Dept: " . $f->department->department_name . "\n";
}

echo "\nChecking for Faculty ID 7:\n";
$faculty7 = App\Faculty::find(7);
if ($faculty7) {
    echo "Faculty 7 exists\n";
} else {
    echo "Faculty 7 does not exist\n";
}

echo "\nChecking all Faculty IDs in order:\n";
for ($i = 1; $i <= 10; $i++) {
    $faculty = App\Faculty::find($i);
    echo "ID $i: " . ($faculty ? "EXISTS" : "MISSING") . "\n";
}
