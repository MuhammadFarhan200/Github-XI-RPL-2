<?php
if (isset($_POST['submit'])) {
    $depart = $_POST['depart'];
    $return = $_POST['return'];
    $dewasa = $_POST['dewasa'];
    $anak = $_POST['anak'];
    $bayi = $_POST['bayi'];

    if ($depart = 'ckg') {
        if ($return = 'sin') {
            $rumusdewasa = 300000 * $dewasa;
            $rumusanak = 300000 * 0.40 * $anak;
            $rumusbayi = 300000 * 0.25 * $bayi;
            $total = $rumusdewasa + $rumusanak + $rumusbayi;
        } else if ($return = 'kul') {
            $rumusdewasa = 250000 * $dewasa;
            $rumusanak = 250000 * 0.40 * $anak;
            $rumusbayi = 250000 * 0.25 * $bayi;
            $total = $rumusdewasa + $rumusanak + $rumusbayi;
        } 
    } else if ($depart = 'srg') {
        if ($return = 'sin') {
            $rumusdewasa = 350000 * $dewasa;
            $rumusanak = 350000 * 0.40 * $anak;
            $rumusbayi = 350000 * 0.25 * $bayi;
            $total = $rumusdewasa + $rumusanak + $rumusbayi;
        } else if ($return = 'kul') {
            $rumusdewasa = 300000 * $dewasa;
            $rumusanak = 300000 * 0.40 * $anak;
            $rumusbayi = 300000 * 0.25 * $bayi;
            $total = $rumusdewasa + $rumusanak + $rumusbayi;
        } 
    } else if ($depart = 'plm') {
        if ($return = 'sin') {
            $rumusdewasa = 325000 * $dewasa;
            $rumusanak = 325000 * 0.40 * $anak;
            $rumusbayi = 325000 * 0.25 * $bayi;
            $total = $rumusdewasa + $rumusanak + $rumusbayi;
        } else if ($return = 'kul') {
            $rumusdewasa = 285000 * $dewasa;
            $rumusanak = 285000 * 0.40 * $anak;
            $rumusbayi = 285000 * 0.25 * $bayi;
            $total = $rumusdewasa + $rumusanak + $rumusbayi;
        } 
    }
}
?>

<html>
    <head><title>Pemesanan Tiket Online</title></head>
    <body align="center">
        <center>
        <h2>Pemesanan Tiket Online Kereta Api</h2>
        <table border="1" cellpadding="5">
        <form action="" method="POST" name="submit">
            <tr>
                <th colspan="3"><center>Pemesanan Tiket Online</center></th>
            </tr>
            <tr>
                <td colspan="3"><center>Promo untuk Keberangkatan 20 Juli 2021 !!</center></td>
            </tr>
            <tr>
                <td>DEPART</td>
                <td> : </td>
                <td>
	        <select name="depart" required>
                    <option value="">Pilih</option>
                    <option value="ckg">Jakarta</option>
		    <option value="srg">Semarang</option>
		    <option value="plm">Palembang</option>
		</select></td>
            </tr>
            <tr>
                <td>RETURN</td>
                <td> : </td>
                <td>
		<select name="return" required>
                    <option value="">Pilih</option>
                    <option value="sin">Singapore</option>
		    <option value="kul">Kuala Lumpur</option>
		</select>
		</td>
            </tr>
            <tr>
                <td>Jumlah Tiket</td>
                <td> : </td>
                <td><input type="number" name="dewasa" placeholder="Jumlah">  Dewasa (+17) <br>
                <input type="number" name="anak" placeholder="Jumlah">  Anak (+2)<br>
                <input type="number" name="bayi" placeholder="Jumlah">  Bayi (0-2)</td>
            </tr>
            <tr>
                <td>Mata Uang</td>
                <td> : </td>
                <td><input type="radio" name="idr">IDR</td>
            </tr>
            <tr>
                <td colspan="3"><center><input type="submit" name="submit">
                <input type="reset" name="reset"></center></td>
            </tr>
            </form>
        </table>
        </center>
    </body>
</html>

<html>
    <body align="center">
        <br>
        <br>
        <center>
            <table border="1" cellpadding="5">
                <tr>
                    <th colspan="3"><center>Struk Pembayaran</center></th>
                </tr>
                <tr>
                    <td>Jumlah Tiket</td>
                    <td>:</td>
                    <td>Dewasa (+17) = <?php echo $dewasa?> Tiket<br>
                    Anak (+2) = <?php echo $anak?> Tiket<br>
                    Bayi (0-2) = <?php echo $bayi?> Tiket<br></td>
                </tr>
                <tr>
                    <td>Jumlah yang Harus Dibayar</td>
                    <td>:</td>
                    <td><?php echo "Rp$total"?></td>
                </tr>
            </table>
        </center>
    </body>
</html>
