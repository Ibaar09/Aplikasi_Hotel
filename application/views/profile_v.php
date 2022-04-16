<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <br>
    <div class="container py-5">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Profile <?= $_SESSION['username']?></h1>
    </div>
    <!-- <div class="card" style="width: 60%"> -->
        <table class="table table-bordered">
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><?=$user['username'] ?></td>
            </tr>
            <tr>
                <td>No hp</td>
                <td>:</td>
                <td><?=$user['no_hp'] ?></td>
            </tr>
        </table>
    <!-- </div> -->
    Klik <a href="<?= base_url('User/update_profile')?>"> Disini </a> Untuk update profile anda <br>  
    Klik <a href="<?= base_url('User/ubah_password')?>"> Disini </a> Untuk mengubah password anda <br>  
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>