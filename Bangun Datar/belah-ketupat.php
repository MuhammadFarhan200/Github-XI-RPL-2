                                

<!DOCTYPE html>
<html>
    <head>
        <title>Kalkulator Bangun Datar | Belah Ketupat</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body align="center" style="margin-top:100px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 py-5">
                    <form method="post">
                        <fieldset align="center" style="border: 1px solid black; padding: 30px; border-radius: 10px;">
                            <h3 style="margin-top: 30px"><b>-- Luas Belah Ketupat --</b></h3><br>
                            <table align="center">
                                <tr>
                                    <td><h5>Masukkan Diagonal 1</h4></td>
                                    <td style="padding: 5px"><h4>:</h5></td>
                                    <td><input type="number" name="d1">
                                    </td>
                                </tr>
                                <tr>
                                    <td><h5>Masukkan Diagonal 2</h5></td>
                                    <td style="padding: 5px"><h4>:</h4></td>
                                    <td><input type="number" name="d2">
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td align="left">
                                        <input type="submit" name="proses1" value=" Proses ">
                                    </td>
                                </tr>
                            </table>
                            <?php
                            if(isset($_POST['proses1'])):
                            $d1 = $_POST['d1'];
                            $d2 = $_POST['d2'];

                            $luas = 1/2 * $d1 * $d2;
                            ?>

                            <hr><br>
                            <table align="center">
                                <style>
                                    th,td {
                                        text-align: left;
                                    }
                                </style>
                                <tr>
                                    <td><b>Diagonal 1</b></td>
                                    <td><b>: <?php echo $d1 ?></b></td>
                                </tr>
                                <tr>
                                    <td><b>Diagonal 2</b></td>
                                    <td><b>: <?php echo $d2 ?></b></td>
                                </tr>
                                <tr><td>&nbsp;</td></tr>
                                <tr><th>- Hasil -</th></tr>
                                <tr>
                                    <td>Luas</td>
                                    <td>: <?php echo $luas ?></td>
                                </tr>
                                <tr><th>- Rumus -</th></tr>
                                <tr>
                                    <td>Luas</td>
                                    <td>: 1/2 × Diagonal 1 × Diagonal 2</td>
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

                            

<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body align="center" style="margin-top:100px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 py-5">
                    <form method="post">
                        <fieldset align="center" style="border: 1px solid black; padding: 30px; border-radius: 10px;">
                            <h3 style="margin-top: 30px"><b>-- Keliling Belah Ketupat --</b></h3><br>
                            <table align="center">
                                <tr>
                                    <td><h5>Masukkan Sisi</h45></td>
                                    <td style="padding: 5px"><h4>:</h5></td>
                                    <td><input type="number" name="sisi">
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td align="left">
                                        <input type="submit" name="proses2" value=" Proses ">
                                    </td>
                                </tr>
                            </table>
                            <?php
                        if(isset($_POST['proses2'])):
                            $sisi = $_POST['sisi'];

                            $kel = 4 * $sisi;
                            ?>

                            <hr><br>
                            <table align="center">
                                <style>
                                    th,td {
                                        text-align: left;
                                    }
                                </style>
                                <tr>
                                    <td><b>Sisi</b></td>
                                    <td><b>: <?php echo $sisi ?></b></td>
                                </tr>
                                <tr><td>&nbsp;</td></tr>
                                <tr><th>- Hasil -</th></tr>
                                <tr>
                                    <td>Keliling</td>
                                    <td>: <?php echo $kel ?></td>
                                </tr>
                                <tr><th>- Rumus -</th></tr>
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
