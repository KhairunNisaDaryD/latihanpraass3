<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Penghuni</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body style="width: 70%; margin: 0 auto; padding-top: 30px;">
	<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>PENGHUNI</h2>
            </div>
        </div>
    </div>
    <hr>
    <a href="/penghuni/form" class="btn btn-primary"><span class="fa fa-plus"></span> Tambah</a>
    <hr>
            <?php if(!empty(session()->getFlashdata('berhasil'))){ ?>
                <div class="alert alert-success">
                    <?php echo session()->getFlashdata('berhasil');?>
                </div>
            <?php } ?>
            
            <?php 
                $errors = $validation->getErrors();
                if(!empty($errors))
                {
                    echo $validation->listErrors();
                }
            ?>
    <div class="row">
    	<div class="col-lg-12">
    		<div class="row">
                <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Unit</th>
                    <th>No KTP</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
                    <?php foreach($penghuni as $row):?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?=$row['nama'];?></td>
                    <td><?=$row['unit'];?></td>
                    <td><?=$row['no_ktp'];?></td>
                    <td><?php
                        if (!empty($row["foto"])) {
                            echo '<img src="'.base_url("assets/images/$row[gambar]").'" width="100">';
                        }
                    ?></td>
                    <td><a href="penghuni/view/<?=$row['id_penghuni'];?>" class="btn btn-success">View</a> | <a href="penghuni/form_edit/<?=$row['id_penghuni'];?>" class="btn btn-primary">Edit</a> | <a href="penghuni/hapus/<?=$row['id_penghuni'];?>" class="btn btn-danger">Hapus</a> </td>
                </tr>
                <?php endforeach;?>
            </table>
    		</div>
    	</div>
    </div>
    
</body>
</html>