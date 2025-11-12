<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h1 align="center">Form Data Diri</h1>
    <hr>

    <center>
        <fieldset style="width: 50%;">
            <legend><b>Form Input Data Diri</b></legend>
            <form method="post" action="">
                <table cellpadding="5" align="center">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="nama" required></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td><input type="date" name="tanggal_lahir" required></td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>:</td>
                        <td>
                            <select name="pekerjaan" required>
                                <option value="">-- Pilih Pekerjaan --</option>
                                <option value="Programmer">Programmer</option>
                                <option value="Designer">Designer</option>
                                <option value="Guru">Guru</option>
                                <option value="Dokter">Dokter</option>
                                <option value="Mahasiswa">Mahasiswa</option>
                                <option value="Pengusaha">Pengusaha</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" align="center">
                            <input type="submit" value="Tampilkan">
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </center>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nama = $_POST['nama'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $pekerjaan = $_POST['pekerjaan'];

        if (!empty($nama) && !empty($tanggal_lahir) && !empty($pekerjaan)) {

            $tgl_lahir = new DateTime($tanggal_lahir);
            $hari_ini = new DateTime();
            $umur = $hari_ini->diff($tgl_lahir)->y;

            switch ($pekerjaan) {
                case 'Programmer': $gaji = 10000000; break;
                case 'Designer': $gaji = 8000000; break;
                case 'Guru': $gaji = 6000000; break;
                case 'Dokter': $gaji = 15000000; break;
                case 'Mahasiswa': $gaji = 500000; break;
                case 'Pengusaha': $gaji = 20000000; break;
                default: $gaji = 0; break;
            }

            echo "<center>";
            echo "<fieldset style='width: 50%; margin-top: 10px;'>";
            echo "<legend><b>Hasil Data Diri</b></legend>";
            echo "<table cellpadding='5' align='center'>";
            echo "<tr><td>Nama</td><td>:</td><td>$nama</td></tr>";
            echo "<tr><td>Tanggal Lahir</td><td>:</td><td>$tanggal_lahir</td></tr>";
            echo "<tr><td>Umur</td><td>:</td><td>$umur tahun</td></tr>";
            echo "<tr><td>Pekerjaan</td><td>:</td><td>$pekerjaan</td></tr>";
            echo "<tr><td>Gaji</td><td>:</td><td>Rp " . number_format($gaji, 0, ',', '.') . "</td></tr>";
            echo "</table>";
            echo "</fieldset>";
            echo "</center>";
        }
    }
    ?>
</body>
</html>
