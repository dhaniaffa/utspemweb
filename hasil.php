<?php
session_start();
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hasil</title>
</head>
<body>
<?php
if ($_GET['status'] == 'benar'){
    echo "
    <div class=\"card\">
        <div class=\"card-header\">Hello ".$_SESSION['nama'].", Selamat jawaban Anda Benar</div>
        <div class=\"card-body\">
            <h5 class=\"card-title\">Lives: ".$_SESSION['nyawa']." | Score: ".$_SESSION['score']."</h5>
            <a href=\"soal.php\" class=\"btn btn-primary\">Soal Selanjutnya</a>
        </div>
    </div>
    ";
} elseif ($_GET['status'] == 'salah'){
    echo "
    <div class=\"card\">
        <div class=\"card-header\">Hello ".$_SESSION['nama'].", Sayang jawaban Anda Salah... Tetap Semangat Ya!!!</div>
        <div class=\"card-body\">
            <h5 class=\"card-title\">Lives: ".$_SESSION['nyawa']." | Score: ".$_SESSION['score']."</h5>
            <a href=\"soal.php\" class=\"btn btn-primary\">Soal Selanjutnya</a>
        </div>
    </div>
    ";
}
?>
</body>
</html>
