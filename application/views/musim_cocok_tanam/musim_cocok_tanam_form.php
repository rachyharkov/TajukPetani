<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Musim_cocok_tanam <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Bulan <?php echo form_error('bulan') ?></label>
            <input type="text" class="form-control" name="bulan" id="bulan" placeholder="Bulan" value="<?php echo $bulan; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Musim Tanaman <?php echo form_error('musim_tanaman') ?></label>
            <input type="text" class="form-control" name="musim_tanaman" id="musim_tanaman" placeholder="Musim Tanaman" value="<?php echo $musim_tanaman; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('musim_cocok_tanam') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>