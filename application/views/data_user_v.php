 <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1>Data User</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Username</th>
                                            <th>Hak akses</th>
                                            <th>Aktivasi</th>
                                            <th>No hp</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; foreach($user as $us){?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $us->username?></td>
                                            <td><?= $us->hak_akses?></td>
                                            <td><?= $us->aktivasi?></td>
                                            <td><?= $us->no_hp?></td>
                                            <td><a href="<?=base_url('Admin/hapususer/'.$us->id_user)?>" class="btn btn-sm btn-danger "> <i class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <?php $no++; }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>


                        
               
           

                        
               
           