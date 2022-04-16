<br>
<div class="container">
<div class="product col-md-9">
			<div class=" shadow">
                <div class="card-body">
                    <h3>Ubah Password</h3>
					<div class="table-responsive">
						<div class="item form-group">
							<div class="card" style="width: 100%">
                            <div class="card-body">
                                <form action="<?= base_url('Login/proses_ganti_password') ?>" method="post">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" id="" class="form-control" value="<?=$user['username']?>"readonly>
                                </div>
                                <div class="form-group">
                                    <label>Password Baru</label>
                                    <input type="password" name="password1" id="" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label>Konfirmasi Password</label>
                                    <input type="password" name="password2" id="" class="form-control">
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                            </div>
                          </div>
						</div>
					</div>
				</div>
            </div>
		</div>
        </div>
        <br>