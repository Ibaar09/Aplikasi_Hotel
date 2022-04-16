<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Kamar</title>
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
                        <h4>Tambah Kamar</h4>
                        <br>
                        <form action="<?=base_url('Admin/proses_tambah_kamar') ?>" method="post">
                            <div class="form-group">
                                <label for="name">Nomor Kamar</label>
                                <input type="text" class="form-control" id="nomor_kamar" name="nomor_kamar" >
                            </div>
                            <div class="form-group">
                                <label for="name">Id Jenis</label>
                                <input type="text" class="form-control" id="id_jenis" name="id_jenis">
                            </div>
                            <br>
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