<?php
session_start();
include ('koneksi.php');
$limit = 10;
$query = mysqli_query($koneksi, "SELECT * FROM uts ORDER BY score DESC LIMIT 10");
$hasil = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Game Over</title>
</head>
<body>
<div class="card">
    <h5 class="card-header">GAME OVER</h5>
    <div class="card-body">
        <h5 class="card-title">Hello <?php echo $_SESSION['nama'];?>, Sayang Permainan Sudah Selesai. Semoga Lain Kali Bisa Lebih Baik</h5>
        <p class="card-text">Score: <?php echo $_SESSION['score'];?></p>
        <a href="index.php" class="btn btn-primary">Main Lagi</a>
        <h1 class="card-title" style="margin-top: 20px; text-align: center">HALL OF FAME</h1>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Score</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $count = 1;
            foreach ($hasil as $item => $value) {
            ?>
            <tr>
                <td><?php echo $count ?></td>
                <td><?php echo $value['nama']; ?></td>
                <td><?php echo $value['score']; ?></td>

            </tr>
            <?php
                $count++;
            }
            ?>
            </tbody>
        </table>


    </div>
</div>
</body>
</html>