<?php
session_start();
include ('koneksi.php');
$numb1 = rand(0,20);
$numb2 = rand(0,20);
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Soal Game Matematika</title>
</head>
<body>
<div class="card">
    <h5 class="card-header">Hallo <?php echo $_SESSION['nama']; ?>, Tetap Semangat Ya... You Can do The Best</h5>
    <div class="card-body">
        <h5 class="card-title">Nyawa: <?php echo $_SESSION['nyawa'];?> | Score: <?php echo $_SESSION['score']; ?></h5>
        <p class="card-text">Berapakah <?php echo $numb1.' + '.$numb2 ?></p>
        <form method="post">
            <div class="form-group">
                <input autocomplete="off" name="jawab" type="number" class="form-control" id="exampleInputPassword1" placeholder="Silahkan Masukan Jawaban Anda" required>
                <input type="hidden" name="numb1" value="<?php echo $numb1 ?>">
                <input type="hidden" name="numb2" value="<?php echo $numb2 ?>">
            </div>
            <input type="submit" class="btn btn-primary" value="submit" name="submit">
        </form>
    </div>
</div>
<?php
if ($_POST['submit']){
    if ($_POST['jawab'] == $_POST['numb1'] + $_POST['numb2']){
        $_SESSION['score'] += 10;
        header('location: hasil.php?status=benar');
    } else {
        $_SESSION['nyawa'] -= 1;
        $_SESSION['score'] -= 2;

        if ($_SESSION['nyawa']>0){
            header('location: hasil.php?status=salah');
        } else{
            if ($_SESSION['mode'] == 1){
                $nama = $_SESSION['nama'];
                $email = $_SESSION['email'];
                $score = $_SESSION['score'];
                $insert = mysqli_query($koneksi, "INSERT INTO uts SET nama='$nama', email='$email', score='$score'");
                if ($insert){
                    header('location: score.php');
                } else{
                    echo "GAGAL INSERT DATA";
                }
            } elseif ($_SESSION['mode'] == 2){
                $nama = $_SESSION['nama'];
                $score = $_SESSION['score'];
                $email = $_SESSION['email'];
                $update = mysqli_query($koneksi, "UPDATE uts SET email='$email', score='$score' WHERE nama='$nama'");
                if ($update){
                    header('location: score.php');
                } else{
                    echo "GAGAL UPDATE DATA";
                }
            }
        }
    }
}
?>
</body>
</html>
