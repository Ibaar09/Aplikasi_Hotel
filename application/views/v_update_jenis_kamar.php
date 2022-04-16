<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah jenis Kamar</title>
</head>
<body>
<div id="layoutSidenav_content">
    <br><br>
     <div class="container-fluid px-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Tambah jenis kamar</h4>
                        <br>
                        <?php
                                foreach($data_jenis as $j):
                                    $id_jenis = $j->id_jenis;
                                endforeach;
                            ?>
                        <form action="<?=base_url('Admin/proses_update_jenis_kamar')?>" method="post">
                            <div class="form-group">
                                <label for="name">Kamar</label>
                                <input type="hidden" name="id_jenis" value="<?= $j->id_jenis?>">
                                <input type="text" class="form-control" id="kamar" name="kamar" value="<?= $j->kamar?>">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="name">Keterangan</label>
                                <textarea name="keterangan" id="keterangan" cols="30" rows="10"  class="form-control"><?= $j->keterangan?></textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="name">Harga</label>
                                <input type="text" class="form-control" id="harga" name="harga" value="<?= $j->harga?>" >
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="name">foto</label>
                                <input type="text" class="form-control" id="foto" name="foto" value="<?= $j->foto?>">
                            </div>
                            <br><br>
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-paper-plane"></i>Ubah</button>
                            <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-undo"></i> Reset</button>
                        </form>
                    </div>    
                </div>      
            </div>    
        </div>              
    </div>                   
</div> 
</body>
</html>