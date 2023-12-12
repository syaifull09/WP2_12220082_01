<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<center>
<form action="<?= base_url('cinema/cetak'); ?>" method="post">
    <table>
    <tr>
        <th colspan="3">
        Pemesanan Tiket Cinema 99
        </th>
    </tr>
    <tr>
        <td colspan="3">
        <hr>
        </td>
    </tr>
    <tr>
    <th>Nama Pemesan</th>
    <td>:</td>
    <td>
    <input type="text" name="nama" id="kode" >
    </td>
    </tr>
    <tr>
    <th>Judul Film</th>
    <td>:</td>
    <td>
    <select name="judul" id="~pilih~">
    <option value="Parasite">Parasite</option>
    <option value="Hereditary">Hereditary</option>
    <option value="The Closet">The Closet</option>
    <option value="Kamen Rider Reiwa">Kamen Rider Reiwa</option>
    </select>
    </td>
    </tr>
    <tr>
    <th>Pukul</th>
    <td>:</td>
    <td>
    <input type="radio" name="waktu" value="14.20">14.20
    <input type="radio" name="waktu" value="15.40">15.40
    <input type="radio" name="waktu" value="16.40">16.40
    </td>
    </tr>
    <tr>
    <th>Type Studio</th>
    <td>:</td>
    <td>
    <input type="radio" name="type" value="Reguler 2D">Reguler 2D
    <input type="radio" name="type" value="3D">3D
    <input type="radio" name="type" value="Velvet">Velvet
    </td>
    </tr>
    <tr>
    <th>Jumlah Pesan</th>
    <td>:</td>
    <td>
    <input type="text" name="jumlah" id="kode" >
    </td>
    </tr>
    <tr>
    <td colspan="3" align="center">
    <input type="submit" value="Hitung">
    <input type="reset" value="Batal">
    </td>
    </tr>
    </table>
    </form>
</center>
</body>
</html>