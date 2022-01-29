<!DOCTYPE html>
<html>
    <head>
        <title>
            Kalkulator Bangun Datar
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body align="center" style="margin-top:100px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 py-5">
                        <form method="post">
                            <fieldset align="center" style="border: 1px solid black; padding: 50px; border-radius: 10px">
                                <h3 style="margin-top: 30px"><b>Kalkulator Bangun Datar</b></h3><br><br>
                                <table align="center" cellpadding="3">
                                    <tr><h5><b>Daftar Bangun Datar</b></h5></tr>
                                    <tr>
                                        <td align="left">1. Persegi</td>
                                    </tr>
                                    <tr>
                                        <td align="left">2. Persegi Panjang</td>
                                    </tr>
                                    <tr>
                                        <td align="left">3. Segitiga</td>
                                    </tr>
                                    <tr>
                                        <td align="left">4. Lingkaran</td>
                                    </tr>
                                    <tr>
                                        <td align="left">5. Jajargenjang</td>
                                    </tr>
                                    <tr>
                                        <td align="left">6. Belah Ketupat</td>
                                    </tr>
                                    <tr>
                                        <td align="left">7. Layang-layang</td>
                                    </tr>
                                    <tr>
                                        <td align="left">8. Trapesium</td>
                                    </tr>
                                </table>
                                <br>
                                <table align="center" cellpadding="3">
                                    <tr>
                                        <td><h5><b>Pilih Bangun Datar :</b></h5></td>
                                        <td>
                                            <select name="pilih" style="padding: 4px">
                                                <option>-- Pilih --</option>
                                                <option value="persegi">Persegi</option>
                                                <option value="persegi panjang">Persegi Panjang</option>
                                                <option value="segitiga">Segitiga</option>
                                                <option value="lingkaran">Lingkaran</option>
                                                <option value="jajargenjang">Jajargenjang</option>
                                                <option value="belah ketupat">Belah Ketupat</option>
                                                <option value="layang-layang">Layang-layang</option>
                                                <option value="trapesium">Trapesium</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td align="left">
                                            <input type="submit" name="proses" value=" Proses ">
                                        </td>
                                    </tr>
                                </table>
                            </fieldset>
                        </form>
                        <?php
                        if(isset($_POST['proses'])) {
                            $pilih = $_POST['pilih'];
                            if ($pilih == "persegi") {
                                header("location:persegi.php");
                            } else if ($pilih == "persegi panjang") {
                                header("location:persegi panjang.php");
                            } else if ($pilih == "segitiga") {
                                header("location:segitiga.php");
                            } else if ($pilih == "lingkaran") {
                                header("location:lingkaran.php");
                            } else if ($pilih == "jajargenjang") {
                                header("location:jajargenjang.php");
                            } else if ($pilih == "belah ketupat") {
                                header("location:belah-ketupat.php");
                            } else if ($pilih == "layang-layang") {
                                header("location:layang-layang.php");
                            } else if ($pilih == "trapesium") {
                                header("location:trapesium.php");
                            }
                        }
                        ?>
                </div>
            </div>
        </div>
    </body>
</html>