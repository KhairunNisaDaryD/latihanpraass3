<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Penghuni</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <script src="<?=base_url('assets/ckeditor/ckeditor.js');?>"></script>
</head>
<body style="width: 70%; margin: 0 auto; padding-top: 30px;">
	<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tambah Penghuni </h2>
            </div>
        </div>
    </div>
    <hr>
    <?=form_open_multipart(base_url('penghuni/simpan'));?>
    <div class="row">
    	<div class="col-lg-12">
    		<div class="row">
    			<div class="col-md-12">
    				<label>nama</label>
    				<div class="form-group">
                   		 <input type="text" name="nama" class="form-control"> 
                	</div>	
    			</div>
    			<div class="col-md-12">
    				<label>unit</label>
    				<div class="form-group">
                   		 <input type="text" name="unit" class="form-control"> 
                	</div>	
    			</div>
                <div class="col-md-12">
    				<label>No KTP</label>
    				<div class="form-group">
                   		 <input type="text" name="no_ktp" class="form-control"> 
                	</div>	
    			</div>
                <div class="col-md-12">
                    <label>Foto</label>
                    <div class="form-group">
                         <input type="file" name="file_upload" class="form-control"> 
                    </div>  
                </div>
    			<div class="col-md-12">
    				<div class="form-group">
                   		  <button class="btn btn-primary">Simpan</button> 
                	</div>	
    			</div>
    		</div>
    	</div>
    </div>
    <?= form_close(); ?>
</body>
</html>