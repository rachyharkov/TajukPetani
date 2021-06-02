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
        <h2 style="margin-top:0px">Musim_cocok_tanam Read</h2>
        <table class="table">
	    <tr><td>Bulan</td><td><?php echo $bulan; ?></td></tr>
	    <tr><td>Musim Tanaman</td><td><?php echo $musim_tanaman; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('musim_cocok_tanam') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>