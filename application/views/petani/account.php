<div style="width: 100%;
    padding: 2px 6px;
    box-shadow: rgb(99 99 99 / 20%) 0px 2px 8px 0px;
    display: grid;
    grid-template-columns: 1fr 0.2fr;">
	<p style="margin: 3px 22px;
    font-size: 21px;
    font-weight: bold;
    line-height: 8vh;">Akun Saya</p>
    <a href="<?php echo base_url() ?>verification/logoutkeun" style="font-size: 23px;
    color: #00000066;
    margin: auto;
    padding: 11px;"><i class="fas fa-sign-out-alt"></i></a>
</div>
<div class="account-window">
	<?php 
	foreach ($qinfo as $v) {
	?>
	<div style="display: grid; grid-template-columns: 0.2fr 1fr 0.2fr">
		<div>
			<img class="img-fluid" src="<?php echo base_url() ?>img/profile-p.png" style="display: block; width: 100%;"/>
		</div>
		<div style="display: grid;grid-template-rows: 15px 15px;padding-left: 10px;">
			<p style="margin: 0; font-size: 20px; font-weight: bold;"><?php echo $v->nama; ?></p>
			<p style="margin: 15px 0; font-size: 15px;color: #0000007d;"><span style="height: 100%;display: inline-block;margin-right: 7px;"><img src="<?php echo base_url() ?>img/<?php echo $this->session->userdata('role') == 'koperasi' ? 'koperasi-icon' : 'petani-icon'; ?>.svg" style="display: block;width: 18px;margin-top: -14px;"></span><?php echo $v->role; ?></p>
		</div>
		<a href="#" style="font-size: 26px;
	    display: inline-block;
	    align-self: center;
	    color: #cbcbcb;
	    padding: 4px;
	    text-align: center;"><i class="fas fa-chevron-right"></i></a>
	</div>

	<div class="info-account-overview">
		<div>
			<p style="font-size: 14px; font-weight: bold; margin-bottom: 4px;">32</p>
			<p style="margin: 0; font-size: 10px; color: gray;">Barang/Hari ini</p>
			<p style="margin: 0; font-size: 12px;">Terdistribusi</p>		
		</div>
		<div>
			<p style="font-size: 14px; font-weight: bold; margin-bottom: 4px;">Rp.32.000</p>
			<p style="margin: 0; font-size: 10px; color: gray;">Hari ini</p>
			<p style="margin: 0; font-size: 12px;">Pemasukan</p>
		</div>
		<div>
			<p style="font-size: 14px; font-weight: bold; margin-bottom: 4px;"><?php echo $countrunningtransaction; ?></p>
			<p style="margin: 0; font-size: 10px; color: gray;">Transaksi</p>
			<p style="margin: 0; font-size: 12px;">Berjalan</p>
		</div>
	</div>
	
	<div style="margin-top: 3vh;
    display: flex;
    flex-wrap: wrap;
    height: 100%;
    justify-content: space-evenly;
    align-content: flex-start;">
		<a class="menu-nav-account-button" href="<?php echo base_url() ?>koperasi/koperasi_products">
			<i class="fas fa-users fa-5x" style="width: 67px;"></i>
			<p style="margin: 8px 0;">Koperasi</p>
		</a>
		<a class="menu-nav-account-button" href="#">
			<i class="fas fa-calendar-alt fa-5x" style="width: 67px;"></i>
			<p style="margin: 8px 0;">Jadwal</p>
		</a>
		<a class="menu-nav-account-button" href="#">
			<i class="fas fa-money-bill fa-5x" style="width: 67px;"></i>
			<p style="margin: 8px 0;">Transaksi</p>
		</a>
		<a class="menu-nav-account-button" href="#">
			<i class="fas fa-cog fa-5x" style="width: 67px;"></i>
			<p style="margin: 8px 0;">Pengaturan</p>
		</a>
	</div>

	<?php
	}
	?>
	
</div>