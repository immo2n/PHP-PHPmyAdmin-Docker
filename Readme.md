# 🐘 PHP + MySQL + phpMyAdmin with Docker

A lightweight and ready-to-go PHP development environment powered by Docker. No XAMPP or manual setup needed — just clone and run.

---

## 🚀 Features

- PHP 8.2 with Apache
- MySQL 8.0
- phpMyAdmin web interface
- No need to install PHP, MySQL, or phpMyAdmin locally
- One command to start everything!

---

## 🧱 Project Structure

```
.
├── compose.yaml
├── Dockerfile
└── src/
    └── index.php
```

---

## ⚙️ Requirements

- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)

---

## 📦 Setup Instructions

1. **Clone the repository:**

   ```bash
   git clone https://github.com/your-username/php-mysql-docker-setup.git
   cd php-mysql-docker-setup
   ```

2. **Run the stack:**

   ```bash
   docker compose up --build
   ```

3. **Open in your browser:**

   - PHP App: [http://localhost:8081](http://localhost:8081)
   - phpMyAdmin: [http://localhost:8082](http://localhost:8082)
     - Server: `mysql`
     - Username: `root`
     - Password: `root`

---

## 🧪 Sample PHP Test (in `src/index.php`)

```php
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
?>
```

---

## 🛠️ Customization

- Add more `.php` files in the `src/` folder.
- Use `phpMyAdmin` to easily manage your MySQL database.
- Edit `compose.yaml` to expose MySQL to your host or change ports.

---

## 📄 License

MIT