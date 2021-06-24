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
                <h2>Edit Penghuni</h2>
            </div>
        </div>
    </div>
    <hr>
    <?=form_open_multipart(base_url('blog/edit'));?>
    <div class="row">
    	<div class="col-lg-12">
    		<div class="row">
    			<div class="col-md-12">
    				<label>Nama</label>
    				<div class="form-group">
                        <input type="hidden" name="id_penghuni" class="form-control" value="<?=$penghuni->id_penghuni?>">
                   		 <input type="text" name="nama" class="form-control" value="<?=$penghuni->nama?>"> 
                	</div>	
    			</div>
    			<div class="col-md-12">
    				<label>Unit</label>
    				<div class="form-group">
                        <input type="hidden" name="id_penghuni" class="form-control" value="<?=$penghuni->id_penghuni?>">
                   		 <input type="text" name="unit" class="form-control" value="<?=$penghuni->unit?>"> 
                	</div>	
    			</div>
                <div class="col-md-12">
    				<label>No KTP</label>
    				<div class="form-group">
                        <input type="hidden" name="id_penghuni" class="form-control" value="<?=$penghuni->id_penghuni?>">
                   		 <input type="text" name="no_ktp" class="form-control" value="<?=$penghuni->no_ktp?>"> 
                	</div>	
    			</div>
                <div class="col-md-12">
                    <label>Foto</label><br/>
                    <?php
                        if (!empty($penghuni->foto)) {
                            echo '<img src="'.base_url("assets/images/$penghuni->foto").'" width="150">';
                        }
                    ?>
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