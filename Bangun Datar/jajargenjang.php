                            
<!DOCTYPE html>
<html>
    <head>
        <title>Kalkulator Bangun Datar | Jajargenjang</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body align="center" style="margin-top:100px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 py-5">
                    <form method="post">
                        <fieldset align="center" style="border: 1px solid black; padding: 30px; border-radius: 10px;">
                            <h3 style="margin-top: 30px"><b>-- Luas Jajargenjang --</b></h3><br>
                            <table align="center">
                                <tr>
                                    <td><h6>Masukkan Sisi Alas</h4></td>
                                    <td style="padding: 5px"><h4>:</h6></td>
                                    <td><input type="number" name="alas">
                                    </td>
                                </tr>
                                <tr>
                                    <td><h6>Masukkan Sisi Tinggi</h6></td>
                                    <td style="padding: 5px"><h4>:</h4></td>
                                    <td><input type="number" name="tinggi">
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
                            $alas = $_POST['alas'];
                            $tinggi = $_POST['tinggi'];

                            $luas = $alas * $tinggi;
                            ?>

                            <hr><br>
                            <table align="center">
                                <style>
                                    th,td {
                                        text-align: left;
                                    }
                                </style>
                                <tr>
                                    <td><b>Alas</b></td>
                                    <td><b>: <?php echo $alas ?></b></td>
                                </tr>
                                <tr>
                                    <td><b>Tinggi</b></td>
                                    <td><b>: <?php echo $tinggi ?></b></td>
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
                                    <td>: Alas × Tinggi</td>
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
                            <h3 style="margin-top: 30px"><b>-- Keliling Jajargenjang --</b></h3><br>
                            <table align="center">
                                <tr>
                                    <td><h6>Masukkan Sisi A</h4></td>
                                    <td style="padding: 5px"><h4>:</h6></td>
                                    <td><input type="number" name="a">
                                    </td>
                                </tr>
                                <tr>
                                    <td><h6>Masukkan Sisi B</h6></td>
                                    <td style="padding: 5px"><h4>:</h4></td>
                                    <td><input type="number" name="b">
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
                            $a = $_POST['a'];
                            $b = $_POST['b'];

                            $kel = 2 * ($a + $b);
                            ?>

                            <hr><br>
                            <table align="center">
                                <style>
                                    th,td {
                                        text-align: left;
                                    }
                                </style>
                                <tr>
                                    <td><b>Sisi A</b></td>
                                    <td><b>: <?php echo $a ?></b></td>
                                </tr>
                                <tr>
                                    <td><b>Sisi B</b></td>
                                    <td><b>: <?php echo $b ?></b></td>
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
                                    <td>: 2 × (A +B)</td>
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