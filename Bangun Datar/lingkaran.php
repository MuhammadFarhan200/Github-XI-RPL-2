<?php
if(isset($_POST['proses'])){
$jari_jari = $_POST['jari_jari'];
$hasil1 = 22/7 * $jari_jari * $jari_jari;
$diameter = $_POST['diameter'];
$hasil2 = 22/7 * $diameter;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Kalkulator Bangun Datar | Lingkaran</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body align="center" style="margin-top:100px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 py-5">
                    <form method="post">
                        <fieldset align="center" style="border: 1px solid black; padding: 30px; border-radius: 10px;">
                            <h3 style="margin-top: 30px"><b>-- Lingkaran --</b></h3><br>
                            <table align="center">
                                <tr>
                                    <td><h5>Masukkan Jari-jari</h4></td>
                                    <td style="padding: 5px"><h4>:</h5></td>
                                    <td><input type="number" name="jari_jari">
                                    </td>
                                </tr>
                                <tr>
                                    <td><h5>Masukkan Diameter</h4></td>
                                    <td style="padding: 5px"><h4>:</h5></td>
                                    <td><input type="number" name="diameter">
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
                                    <td>: Phi × Jari-jari × Jari-jari</td>
                                </tr>
                                <tr>
                                    <td>Keliling</td>
                                    <td>: Phi × Diameter / 2 × Phi × Jari-jari</td>
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