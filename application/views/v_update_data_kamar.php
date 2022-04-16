<div id="layoutSidenav_content">
    <br><br>
     <div class="container-fluid px-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>update Kamar</h4>
                        <br>
                            <?php
                                foreach($data_kamar as $k):
                                    $id_kamar = $k->id_kamar;
                                endforeach;
                            ?>

                    <form action="<?=base_url('Admin/proses_update_kamar')?>" method="post">
						<div class="form-group">
                            <input type="hidden" name="id_kamar"  class="form-control" value="<?= $k->id_kamar?>"> 
                                <label for="name">Nomor Kamar</label>
								<input type="text" name="nomor_kamar" id="nomor_kamar" class="form-control" value="<?=  $k->nomor_kamar?>">
                            </div>
                            <div class="form-group">
                                <label for="name">Jenis</label>
                                <td><input type="text" name="id_jenis" id="id_jenis" class="form-control" value="<?= $k->id_jenis?>"></td>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-paper-plane"></i>Ubah</button>
                            <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-undo"></i> Reset</button>    		
                        </div>    
                    </form>
                </div>      
            </div>    
        </div>              
    </div>                   
</div> 