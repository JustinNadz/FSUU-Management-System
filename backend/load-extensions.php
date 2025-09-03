<?php
// Force load PostgreSQL extensions
echo "🔧 Loading PostgreSQL extensions...\n";

// Check if extensions are already loaded
if (!extension_loaded('pdo_pgsql')) {
    echo "❌ pdo_pgsql not loaded, attempting to load...\n";
    if (function_exists('dl')) {
        dl('pdo_pgsql.so');
    }
}

if (!extension_loaded('pgsql')) {
    echo "❌ pgsql not loaded, attempting to load...\n";
    if (function_exists('dl')) {
        dl('pgsql.so');
    }
}

// Final check
echo "Final extension status:\n";
echo "pdo_pgsql: " . (extension_loaded('pdo_pgsql') ? '✅ LOADED' : '❌ NOT LOADED') . "\n";
echo "pgsql: " . (extension_loaded('pgsql') ? '✅ LOADED' : '❌ NOT LOADED') . "\n";

// Test database connection
if (extension_loaded('pdo_pgsql')) {
    echo "🧪 Testing database connection...\n";
    
    $host = 'db.aehkeidsmaqwoqprwpme.supabase.co';
    $port = '5432';
    $dbname = 'postgres';
    $username = 'postgres';
    $password = 'Anonymous141';
    
    try {
        $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
        $pdo = new PDO($dsn, $username, $password, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
        
        echo "✅ Database connection successful!\n";
        
        // Test a simple query
        $stmt = $pdo->query("SELECT version()");
        $version = $stmt->fetchColumn();
        echo "PostgreSQL version: $version\n";
        
    } catch (PDOException $e) {
        echo "❌ Database connection failed: " . $e->getMessage() . "\n";
    }
} else {
    echo "❌ Cannot test database connection - pdo_pgsql extension not loaded\n";
}
?>
