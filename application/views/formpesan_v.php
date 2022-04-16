        	<div class="col-lg-4 py-0">
                <div class="panel panel-default">
                    <h4>Silahkan Masukan Data Anda</h4>
                    <hr>
                    <div class="panel-body">
                        <form action="<?=base_url('Pesan/simpan_konsumen') ?>" method="post">
                          <div class="form-group">
                        	<label>Nama Depan </label>
                            <div class="input-group col-lg-6">
                              <input type="text" class="form-control" name="nama_depan" id="nama_depan" required>
                            </div>
                          </div>
                          <div class="form-group">
                        	<label>Nama Tengah</label>
                            <div class="input-group col-lg-6">
                              <input type="text" class="form-control" name="nama_tengah" id="nama_tengah" required>
                            </div>
                          </div>
                          <div class="form-group">
                        	<label>Nama Belakang</label>
                            <div class="input-group col-lg-6">
                              <input type="text" class="form-control" name="nama_belakang" id="nama_belakang" required>
                            </div>
                          </div>
                          <div class="form-group">
                        	<label>Alamat </label>
                            <div class="input-group col-lg-6">
                             <textarea name="alamat" id="alamat"  class="form-control"  cols="15" rows="5" required></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                        	<label>Kota</label>
                            <div class="input-group col-lg-6">
                              <input type="text" class="form-control" name="kota" id="kota" required>
                            </div>
                          </div>
                          <div class="form-group">
                        	<label>Provinsi</label>
                            <div class="input-group col-lg-6">
                            <select class="form-control" id="provinsi" name="provinsi">
                                <option selected="0">..........</option>
                                <?php foreach($provinsi as $prov) : ?>
                                  <option value="<?= $prov->id_provinsi;?>"> <?= $prov->nama_provinsi; ?></option>
                                <?php endforeach; ?>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                        	<label>Negara</label>
                            <div class="input-group col-lg-6">
                              <input type="text" class="form-control" name="negara" id="negara" required>
                            </div>
                          </div>
                          <div class="form-group">
                        	<label>No Identitas</label>
                            <div class="input-group col-lg-6">
                              <input type="text" class="form-control" name="no_identitas" id="kota" required>
                            </div>
                          </div>
                          <div class="form-group">
                        	<label>Nomor Handphone </label>
                            <div class="input-group col-lg-6">
                              <input type="text" class="form-control" name="no_telp" id="no_telp" required>
                            </div>
                          </div>
                          <div class="form-group">
                        	<label>Email</label>
                            <div class="input-group col-lg-6">
                              <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                          </div>
                          <hr>
                        <a href="<?=base_url('Kamar_jenis/tampil_standard') ?>"><button class="btn btn-danger btn-sm book" title="Pesan" type="button" >
                            <i class="glyphicon glyphicon-plus">Batal</i>
	                      </button></a>
                        <button class="btn btn-success btn-sm book" title="Pesan" type="submit" >
                            <i class="glyphicon glyphicon-plus">Pesan</i>
	                      </button>
                      </form>
                    </div>
                </div>
            </div>
        </div>
      </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>