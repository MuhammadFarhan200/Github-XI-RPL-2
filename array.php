<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Input</title>
</head>
<body>
<h3>Nama Mahasiswa</h3>
<form action="output.php" method="post"><ol>
<?php
for ($a=1; $a <=1 ; $a++) {
echo "<li> <input type='text' name='mahasiswa[$a]'>";}
?>
</ol><input type="submit" value=" Oke " /></form>
</body>
</html>
