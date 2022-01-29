<?php
if(isset($_POST['proses'])){
$alas = $_POST['alas'];
$tinggi = $_POST['tinggi'];


$hasil1 = 0.5 * $alas * $tinggi;
$hasil2 = $alas * $tinggi;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Kalkulator Bangun Datar | Segitiga</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body align="center" style="margin-top:100px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 py-5">
                    <form method="post">
                        <fieldset align="center" style="border: 1px solid black; padding: 30px; border-radius: 10px;">
                            <h3 style="margin-top: 30px"><b>-- Segitiga --</b></h3><br>
                            <table align="center">
                                <tr>
                                    <td><h5>Masukkan Sisi Alas</h4></td>
                                    <td style="padding: 5px"><h4>:</h5></td>
                                    <td><input type="number" name="alas">
                                    </td>
                                </tr>
                                <tr>
                                    <td><h5>Masukkan Sisi Tinggi</h5></td>
                                    <td style="padding: 5px"><h4>:</h4></td>
                                    <td><input type="number" name="tinggi">
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td align="left">
                                        <input type="submit" name="proses" value=" Proses ">
                                    </td>
                                </tr>
                            </table>
                            <hr><br>
                            <table align="center">
                                <style>
                                    th,td {
                                        text-align: left;
                                    }
                                </style>
                                <tr><th>- Hasil -</th></tr>
                                <tr>
                                    <td>Luas</td>
                                    <td>: <?php echo $hasil1 ?></td>
                                </tr>
                                <tr>
                                    <td>Keliling</td>
                                    <td>: <?php echo $hasil2 ?></td>
                                </tr>
                                <tr><th>- Rumus -</th></tr>
                                <tr>
                                    <td>Luas</td>
                                    <td>: 1/2 × Alas × Tinggi</td>
                                </tr>
                                <tr>
                                    <td>Keliling</td>
                                    <td>: Alas × Tinggi / Sisi × 3</td>
                                </tr>
                            </table>
                            <p align="right"><a href="bangundatar.php" style="text-decoration: none; color: black; border: 1px solid black; background: whitesmoke; border-radius: 2px; padding: 5px">Back</p></a>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>