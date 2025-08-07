<?php
$host = getenv('MYSQL_HOST');
$user = getenv('MYSQL_USER');
$pass = getenv('MYSQL_PASSWORD');
$db   = getenv('MYSQL_DATABASE');

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("<h1>Connection failed: " . $conn->connect_error . "</h1>");
}

echo "<h1>Hello from PHP!</h1>";
echo "<p>Connected to MySQL database successfully.</p>";

echo "To visit the phpmyadmin to goto: ";
echo '<a target="_blank" href="http://localhost:7001">localhost:7001</a>';
echo '<br>User: root, Password: root';

echo "<br><br> To update the app content, keep on adding and editing the src folder!"
?>
