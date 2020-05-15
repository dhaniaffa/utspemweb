<?php
session_start();
if ($_GET['status'] == 'baru'){
    session_destroy();
    header('location:index.php');
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>UTS PEMWEB</title>
</head>
<body>

<div class="card">
    <h5 class="card-header">HALO SELAMAT DATANG</h5>
    <div class="card-body">
        <?php
        if (!$_SESSION['nama']){ ?>
            <h5 class="card-title">Silahkan Isi Form Dibawah</h5>
        <form method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Silahkan Masukan Nama Anda" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                <input name="email" type="email" class="form-control" id="exampleInputPassword1" placeholder="Silahkan Masukan Email Anda" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
        <?php
        } else { ?>
            <div class="card">
                <h5 class="card-header">Halo <?php echo $_SESSION['nama'];?>, Selamat Datang Kembali Ke Permainan Ini!</h5>
                <div class="card-body">
                    <form method="post">
                        <p class="card-text" style="margin-top: 15px">Bukan Anda? <a href="?status=baru" class="">Klik Disini</a></p>
                        <input type="submit" class="btn btn-primary" name="submit" value="Start Game">
                    </form>
                </div>
            </div>

        <?php
        }
        ?>
    </div>
</div>
<?php
/*
 * MODE 1 = NEW
 * MODE 2 = TRY
 */
if (isset($_POST['submit'])){
    if(isset($_SESSION['email'])){
        $_SESSION['nyawa'] = 5;
        $_SESSION['score'] = 0;
        $_SESSION['mode'] = 2;
    } else{
        $_SESSION['nama'] = $_POST['nama'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['nyawa'] = 5;
        $_SESSION['score'] = 0;
        $_SESSION['mode'] = 1;
    }

    header('Location: soal.php');
}

?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>