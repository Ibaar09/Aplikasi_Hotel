<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1>Data Konsumen</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                            <th>no</th>
                                            <th>Nama Depan</th>
                                            <th>Nama Tengah</th>
                                            <th>Nama Belakang</th>
                                            <th>Alamat</th>
                                            <th>Kota</th>
                                            <th>Provinsi</th>
                                            <th>Negara</th>
                                            <th>No Identitas</th>
                                            <th>No Telepon</th>
                                            <th>Email</th>
                                            <th>Aksi</th>
                                        </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; foreach($konsumen as $km) { ?>
                                    <tr>
                                        <td><?= $no?></td>
                                        <td><?= $km->nama_depan?></td>
                                        <td><?= $km->nama_tengah?></td>
                                        <td><?= $km->nama_belakang?></td>
                                        <td><?= $km->alamat?></td>
                                        <td><?= $km->kota?></td>
                                        <td><?= $km->provinsi?></td>
                                        <td><?= $km->negara?></td>
                                        <td><?= $km->no_identitas?></td>
                                        <td><?= $km->no_telp?></td>
                                        <td><?= $km->email?></td>
                                        <td><a href="<?= base_url('Admin/hapus_konsumen/'.$km->id_konsumen)?>" class="btn btn-sm btn-dark"> <i class="fa fa-trash"></i></a></td>      
                                    </tr>
                                    <?php $no++;  }?>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>


                        
               
           