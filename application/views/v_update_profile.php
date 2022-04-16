    <div class="container">
        <div class="row py-5" >
            <div class="col-lg-12 text-center">
                <h2 class="section-headig text-uppercase">Profile</h2>
                <h3 class="section-sbheaading text-muted">Selamat Datang Di Hotel Resik</h3>
                <form action="<?= base_url('user/proses_update_profile')?>" method="post">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td class="text-start" width="15%"> Username </td>
                            <td>:</td>
                            <td class="text-start"> <input class="form-control" name='username' type="text" value="<?=$user['username']?>"readonly></td>
                        </tr>
                        <tr>
                            <td class="text-start" width="15%"> No HP </td>
                            <td>:</td>
                            <td class="text-start"><input class="form-control" name='no_hp' type="text" value="<?= $user['no_hp']?>"></td>
                        </tr>
                        <tr>
                            <td colspan="3"><button type="submit" class="btn btn-primary">Update</button></td>
                        </tr>
                    </tbody>
                </table>
                </form>
                    </div>
                </div>
            </div>
 <br><br><br><br><br><br><br><br><br><br><br><br>

