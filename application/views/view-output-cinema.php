<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
<body>
  <center>
    <table>
    <tr>
      <th colspan ='3'>
<h2>Pemesanan Tiket Cinema 99</h2>
</th>
            </tr>
            <tr>
                <td colspan="3">
                    </td>
            </tr>
            <tr>
                <td>Nama Pemesan</td>
                <td>:</td>
                <td>
                    <?= $_POST['nama']; ?>
                </td>
            </tr>
            <tr>
                <td>Judul Film</td>
                <td>:</td>
                <td>
                    <?= $_POST['judul']; ?>
                </td>
            </tr>
            <tr>
                <td>Pukul</td>
                <td>:</td>
                <td>
                    <?= $_POST['waktu']; ?>
                </td>
            </tr>
            <tr>
                <td>Type Studio</td>
                <td>:</td>
                <td>
                    <?= $_POST['type']; ?>
                </td>
            </tr>
            <tr>
                <td>Jumlah Pesan</td>
                <td>:</td>
                <td>
                    <?= $jumlah = $_POST['jumlah']; ?>
                </td>
            </tr>
            <?php
                    if ($type=="Reguler2D")
                    {
                        $harga = 40000;
                    }
                    elseif ($type=="3D")
                    {
                        $harga=80000;
                    }
                    else
                    {
                        $harga=100000;
                    }
                    $total= $harga*$jumlah;?></tr>
                    <tr>
                <td>Harga Tiket</td>
                <td>:</td>
                <td>
                    <?= $harga; ?>
                </td>
                </tr>
            <tr>
                    <td>Total</td>
                    <td>:</td>
                    <td>
                        <?= $total; ?>
                    </td>
                </tr>
               <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('cinema'); ?>">Input Data Lagi</a>
                
                </td>
            </tr>
        </table>
    </center>
  </body>
</html>
