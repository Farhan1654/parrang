<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Penggunaan Switch</h2>
    <?php 
        $angka_mutu=3;
        echo("Angka mutu $angka_mutu <br>");
        switch($angka_mutu)
        {
            case 0: echo("huruf mutu E"); break;
            case 1: echo("huruf mutu D"); break;
            case 2: echo("huruf mutu C"); break;
            case 3: echo("huruf mutu B"); break;
            case 4: echo("huruf mutu A"); break;
            default: echo("huruf mutu tidak dikenali");
        }
    ?>
</body>
</html>