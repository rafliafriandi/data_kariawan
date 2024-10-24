<?php
$koneksi = mysqli_connect("localhost", "root", "", "latihan");

if (isset($_POST['simpan'])) {
    // Corrected variable names for the POST data
    $nik = mysqli_real_escape_string($koneksi, $_POST['nik']);
    $nama = mysqli_real_escape_string($koneksi, $_POST['namaKariawan']);
    $jenisKelamin = mysqli_real_escape_string($koneksi, $_POST['jenisKelamin']);
    $jabatan = mysqli_real_escape_string($koneksi, $_POST['Jabatan']); 

    // Corrected SQL query
    $simpan = mysqli_query($koneksi, "INSERT INTO data_mhs (nik, nama, jenisKelamin, Jabatan) VALUES ('$nik', '$nama', '$jenisKelamin', '$jabatan')");

    // Corrected alert and script tags
    if ($simpan) {
        echo "<script>
                window.alert('Data karyawan berhasil disimpan');
                window.location='index.php';
              </script>";
    } else {
        echo "<script>
                window.alert('Data karyawan gagal disimpan');
                window.location='index.php';
              </script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Karyawan</title>
</head>
<body>
    <center>
        <h4>Data Karyawan</h4>
        <form method="post"> <!-- Added form tag -->
            <table>
                <tr>
                    <td>NIK:</td>
                    <td>
                        <input type="text" placeholder="nik" name="nik" required>
                    </td>
                </tr>
                <tr>
                    <td>Nama Karyawan:</td>
                    <td>
                        <input type="text" placeholder="namaKaryawan" name="namaKariawan" required>
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin:</td>
                    <td>
                        <input type="text" placeholder="jenisKelamin" name="jenisKelamin" required>
                    </td>
                </tr>
                <tr>
                    <td>Jabatan:</td>
                    <td>
                        <input type="text" placeholder="Jabatan" name="Jabatan" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="simpan" value="Simpan Data"> <!-- Corrected 'sumbit' to 'submit' -->
                    </td>
                </tr>
            </table>
        </form>
    </center>    
</body>
</html>
