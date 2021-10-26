<!DOCTYPE html>
<html lang="en">

<head>
    <title>Quiz Crud Pra UTS </title>
</head>

<body>
    <center>
        <h1>Quiz Crud</h1>
        <h3>Form Data</h3>
    </center>
    <form action="<?php echo base_url() . 'crud/tambah_aksi'; ?>" method="post">
        <table style="margin: 20px auto;">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" id=""></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="nim" id=""></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><input type="text" name="kelas" id=""></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" id=""></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td><input type="text" name="pekerjaan" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" value="Tambah"></td>
            </tr>
        </table>
    </form>
</body>

</html>
