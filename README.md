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
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Operator</title>
</head>
<body>
    <h1>Operator Aritmatika</h1>
    <?php
        $gaji = 1000000;
        $pajak = 0.1;
        $thp = $gaji - ($gaji * $pajak);

        echo "Gaji sebelum pajak = Rp. $gaji <br>";
        echo "Gaji dibawa pulang = Rp. $thp";
    ?>
</body>
</html>
```

Hasilnya

![gambar](https://github.com/andreanbadeh/Lab7Web/blob/a8b61ecdd6a87ea3dcf2c8033dba3911c63dfa62/image/Screenshot%20from%202025-11-12%2018-56-06.png)

# Kondisi IF
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kondisi If</title>
</head>
<body>
    <h1>Kondisi IF</h1>
    <?php
        $nama_hari = date("l");
        if ($nama_hari == "Sunday") {
            echo "Minggu";
        } elseif ($nama_hari == "Monday") {
            echo "Senin";
        } else {
            echo "Hari lainnya";
        }
    ?>
</body>
</html>
```

Hasilnya

![gambar](https://github.com/andreanbadeh/Lab7Web/blob/6bdccde74344c3880da6e33516f51926c51156dc/image/Screenshot%20from%202025-11-12%2018-59-51.png)

# Kondisi switch
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kondisi Switch</title>
</head>
<body>
    <h1>Kondisi Switch</h1>
    <?php
        $nama_hari = date("l");
        switch ($nama_hari) {
            case "Sunday":
                echo "Minggu";
                break;
            case "Monday":
                echo "Senin";
                break;
            case "Tuesday":
                echo "Selasa";
                break;
            default:
                echo "Hari lainnya";
                break;
        }
    ?>
</body>
</html>
```

Hasilnya

![gambar](https://github.com/andreanbadeh/Lab7Web/blob/66b584a78e7fa0b10cee93a05b1ce87fe0a30aae/image/Screenshot%20from%202025-11-12%2019-03-32.png)

# Perulangan for
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Perulangan For</title>
</head>
<body>
    <h1>Perulangan FOR</h1>
    <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "Perulangan ke-$i<br>";
        }
    ?>
</body>
</html>
```

Hasilnya

![gambar](https://github.com/andreanbadeh/Lab7Web/blob/91454ca678a113266c49b4f0a18ad439bb8a802b/image/Screenshot%20from%202025-11-12%2019-08-40.png)

# Perulangan while
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Perulangan While</title>
</head>
<body>
    <h1>Perulangan WHILE</h1>
    <?php
        $i = 1;
        while ($i <= 10) {
            echo "Perulangan ke-$i<br>";
            $i++;
        }
    ?>
</body>
</html>
```
Hasilnya

![gambar](https://github.com/andreanbadeh/Lab7Web/blob/09505a3812dd10bef5b2a6f32eca3843519b210d/image/Screenshot%20from%202025-11-12%2019-10-04.png)

# Perulangan dowhile
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Perulangan Do While</title>
</head>
<body>
    <h1>Perulangan DO WHILE</h1>
    <?php
        $i = 1;
        do {
            echo "Perulangan ke-$i<br>";
            $i++;
        } while ($i <= 10);
    ?>
</body>
</html>
```
Hasilnya 

![gambar](https://github.com/andreanbadeh/Lab7Web/blob/75b126589f355f73ef90e652467494fe5b08f130/image/Screenshot%20from%202025-11-12%2019-11-12.png)

# Pertanyaan dan Tugas
![gambar]()
