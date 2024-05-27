<!DOCTYPE html>
<html lang="en">

<?php
include 'proses.php';

if(isset($_POST["kirim"])) {
    $proses = new Beli();
    $proses->setHarga(15420, 16130, 18310, 16510);
    $proses->jenis = $_POST['jenis'];
    $proses->jumlah = $_POST['jumlah'];

    $proses->hargaBeli();
    $proses->cetakPembelian();
}

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"`>
    <title>bahan bakar</title>
</head>

<body>
<center>

    <form action="" method="post">
        <table>
            <tr>
                <td>
                    <label for="jumlah">Jumlah Liter: </label>
                    <input type="number" name="jumlah" id="jumlah" min=1>
                </td>
                <td>
                    <label for="jenis">Pilih BBM: </label>
                    <select name="jenis" id="jenis">
                        <option value="SSuper">Shell Super</option>
                        <option value="SVPower">Shell V-Power</option>
                        <option value="SVPowerDiesel">Shell V-Power Diesel</option>
                        <option value="SVPowerNitro">Shell V-Power Nitro</option>
                </td>
            </tr>
        </table>
        <button type="submit" name="kirim">Beli</button>
    <form>

</center>
</body>
</html>
