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
                        <form action="<?=base_url('Admin/proses_tambah_jenis_kamar')?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name">Kamar</label>
                                <input type="text" class="form-control" id="kamar" name="kamar">
                            </div>
                            <div class="form-group">
                                <label for="name">Keterangan</label>
                                <textarea name="keterangan" id="keterangan" cols="30" rows="10" class="form-control" ></textarea>
                            </div>
                            <div class="form-group">
                                <label for="name">Harga</label>
                                <input type="text" class="form-control" id="harga" name="harga">
                            </div>
                            <div class="form-group">
                                <label for="name">foto</label>
                                <input type="file" class="form-control" id="foto" name="foto" accept="image/jpeg, image/jpg, image/png">
                            </div>
                            <br><br>
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-paper-plane"></i>  Simpan</button>
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