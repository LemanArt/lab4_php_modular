# lab4_php_modular
## Php Modular
1. buat file header.php
    ```php
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Contoh Modularisasi</title>
        <link href="style.css" rel="stylesheet" type="text/stylesheet" media="screen" />
    </head>
    <body>
        <div class="container">
            <header>
                <h1>Modularisasi Menggunakan Require</h1>
            </header>
            <nav>
                <a href="home.php">Home</a>
                <a href="about.php">Tentang</a>
                <a href="kontak.php">Kontak</a>
            </nav>
    ```
2. Buat file footer.php
    ```php
    <footer>
        <p>&copy; 2021, Informatika, Universitas Pelita Bangsa</p>
    </footer>
    </div>
    </body>
    </html>
    ```
3. buat file home.php untuk mengakses halaman HOME
    ```php
    <?php require('header.php'); ?>
    <div class="content">
    <h2>Ini Halaman Home</h2>
    <p>Ini adalah bagian content dari halaman.</p>
    </div>
    <?php require('footer.php'); ?>
    ```
    <b>Hasil</b><br>
   ![Gambar1](img/home.png)
4. buat file about.php untuk mengakses halaman ABOUT
    ```php
    <?php require('header.php'); ?>
    <div class="content">
        <h2>Ini Halaman About</h2>
        <p>Ini adalah bagian content dari halaman.</p>
    </div>
    <?php require('footer.php'); ?>
    ```
    <b>Hasil</b><br>
   ![Gambar1](img/about.png)
5. buat file kontak.php untuk mengakses halaman KONTAK
    ```php
    <?php require('header.php'); ?>
    <div class="content">
        <h2>Ini Halaman Kontak</h2>
        <p>Ini adalah bagian content dari halaman.</p>
    </div>
    <?php require('footer.php'); ?>
    ```
    <b>Hasil</b><br>
   ![Gambar1](img/kontak.png)
6. Membuat Routing
Routing digunakan untuk mempermudah akses halaman web agar SEO Friendly.<br>
Membuat file index.php
    ```php
        <?php
        $mod = $_REQUEST['mod'];
        switch ($mod) {
            case "home":
                require("home.php");
                break;
            case "about":
                require("about");
                break;
            case "kontak":
                require("kontak");
                break;
        }
    ```
7. Membuat file .htaccess
```php
    <IfModule mod_rewrite.c>
        RewriteEngine On
        RewriteBase /lab4/
        RewriteCond %{REQUEST_FILENAME} !-f
        RewriteCond %{REQUEST_FILENAME} !-d
        RewriteRule ^(.*)$ index.php?mod=$1 [L]
    </IfModule>
```
    <br>
• Berikut ini adalah demo dari project
![Gambar1](img/modularphp.gif)