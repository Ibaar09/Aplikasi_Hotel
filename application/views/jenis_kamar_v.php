<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1>Data Jenis Kamar</h1>
                        <a href="<?=base_url('Admin/tambah_jenis_kamar')?>"><button type="submit" class="btn btn-dark float-right">Tambah Data</button></a>
                        <br><br>
                        <div class="card mb-4">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                <thead>
                                        <tr>
                                            <th>no</th>
                                            <th>kamar</th>
                                            <th>keterangan</th>
                                            <th>harga</th>
                                            <th>foto</th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>no</th>
                                            <th>kamar</th>
                                            <th>keterangan</th>
                                            <th>harga</th>
                                            <th>foto</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $no = 1; foreach($jenis_kamar as $j) {?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $j->kamar ?></td>
                                            <td><?= $j->keterangan ?></td>
                                            <td><?= $j->harga ?></td>
                                            <td><img src="<?=base_url('assets/img/').$j->foto; ?>"  width="200px" ></td>
                                            <td>
                                                <a href="<?= base_url('Admin/update_datajenis/'.$j->id_jenis)?>" class="btn btn-warning btn-warning"><i class="fa fa-edit"></i></a>
                                                <a href="<?= base_url('Admin/hapus_datajenis/'.$j->id_jenis)?>"class="btn btn-danger btn-danger"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php $no++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
