<br>
<div class="container">
<div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            Reservasi Kamar 
                        </h2>
                    </div>
                </div>
                <form action="<?=base_url('Transaksi')?>" method="post">
                <div class="row"> 
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Nama Tamu</label>
                                        <div class="col-sm-10">
                                          <input list="tamu" name="tamu" placeholder="Nama" class="form-control">
                                        </div> 
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Tanggal cek in</label>
                                        <div class="col-sm-10">
                                          <input type="date" name="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Tanggal cek out</label>
                                        <div class="col-sm-10">
                                          <input type="date" name="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Lama Sewa</label>
                                        <div class="col-sm-10">
                                          <input type="text" name="" class="form-control">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                          <button type="submit" name="submit" class="btn btn-primary btn-sm">Cek out sekarang</button>
                                        </div>
                                        <br>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </form>
                    <div class="col-md-12"> 
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Tamu</th>
                                                <th>Tanggal cek in</th>
                                                <th>Tanggal cek out</th>
                                                <th>Harga Sewa Per Hari</th>
                                                <th>Lama Sewa</th>
                                                <th>Sub Total</th>
                                                <th>Aksi</th>
                                            </tr> 
                                        </thead>
                                        <?php $no = 1; foreach($booking as $b) {?>
                                        <tbody>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tbody>
                                        <?php $no++; } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>