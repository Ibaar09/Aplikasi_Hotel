<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1>Data Kamar</h1>
                        <a href="<?=base_url('Admin/tambah_data_kamar')?>"><button type="submit" class="btn btn-dark">Tambah Data</button></a>
                        <br><br>
                        <div class="card mb-4">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nomor kamar</th>
                                            <th>Jenis</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $no = 1; foreach($join as $k) {?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $k->nomor_kamar ?></td>
                                            <td><?= $k->kamar ?></td>
                                            <td><a href="<?=base_url('Admin/update_kamar/'.$k->id_kamar)?>" class="btn btn-sm btn-warning btn-warning"><i class="fa fa-edit"></i></a>
                                            <a href="<?=base_url('Admin/hapus_kamar/'.$k->id_kamar)?>" class="btn btn-sm btn-warning btn-danger"> <i class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <?php $no++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>


                        
               
           