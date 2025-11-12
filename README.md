# Praktikum 7: PHP Dasar
NAMA : ANDREAN PUTRA ARYA

NIM : 312410341

KELAS : TI.24.A.4

# PHP Dasar

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>PHP Dasar</h1>
    <?php
        echo "Hello World";
    ?>
</body>
</html>
```

Hasil nya

![gambar](https://github.com/andreanbadeh/Lab7Web/blob/bf69d894915cdfa0abe4687e0ec9ebc1a43d6a4b/image/Screenshot%20from%202025-11-12%2018-42-05.png)

# Variable PHP

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Variabel PHP</title>
</head>
<body>
    <h1>Variabel PHP</h1>
    <?php
        $nim = "312410341";
        $nama = "andrean";
        echo "NIM : " . $nim . "<br>";
        echo "Nama : $nama";
    ?>
</body>
</html>
```

hasilnya

![gambar](https://github.com/andreanbadeh/Lab7Web/blob/d29cb2ea2f636221b39b1dc8c10cfd0b7e3112a6/image/Screenshot%20from%202025-11-12%2018-44-38.png)

# Membuat Form Input

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Input</title>
</head>
<body>
    <h1>Form Input</h1>
    <form method="post">
        <label>Nama:</label>
        <input type="text" name="nama">
        <input type="submit" value="Kirim">
    </form>

    <?php
        if (!empty($_POST['nama'])) {
            echo "Selamat Datang " . $_POST['nama'];
        }
    ?>
</body>
</html>
```
Hasilnya

![gambar](https://github.com/andreanbadeh/Lab7Web/blob/6ed7d9766977136cdd27508b28bae6751a3ff3be/image/Screenshot%20from%202025-11-12%2018-49-29.png)

# Operator
