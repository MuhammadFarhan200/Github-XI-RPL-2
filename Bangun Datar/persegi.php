
<!DOCTYPE html>
<html>
    <head>
        <title>Kalkulator Bangun Datar | Persegi</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body align="center" style="margin-top:100px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 py-5">
                    <form method="post">
                        <fieldset align="center" style="border: 1px solid black; padding: 30px; border-radius: 10px;">
                            <h3 style="margin-top: 30px"><b>-- Persegi --</b></h3><br>
                            <table align="center">
                                <tr>
                                    <td><h6>Masukkan Nilai Sisi : </h6></td>
                                    <td style="padding: 5px">
                                        <input type="number" name="sisi">
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td align="left">
                                        <input type="submit" name="proses" value=" Proses ">
                                    </td>
                                </tr>
                            </table>
                            <?php
                        if(isset($_POST['proses'])):
                            $sisi = $_POST['sisi'];

                            $hasil1 = $sisi * $sisi;
                            $hasil2 = 4 * $sisi;
                            ?>

                            <hr><br>
                            <table align="center">
                                <style>
                                    th,td {
                                        text-align: left;
                                    }
                                </style>
                                <tr>
                                    <td><b>- Nilai Sisi</b></td>
                                    <td><b>: <?php echo $sisi ?></b></td>
                                </tr>
                                <tr><td>&nbsp;</td></tr>
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
                                    <td>: Sisi × Sisi</td>
                                </tr>
                                <tr>
                                    <td>Keliling</td>
                                    <td>: 4 × Sisi</td>
                                </tr>
                            </table>
                            <p align="right"><a href="bangundatar.php" style="text-decoration: none; color: black; border: 1px solid black; background: whitesmoke; border-radius: 2px; padding: 5px">Back</p></a>
                            <?php endif ?>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>