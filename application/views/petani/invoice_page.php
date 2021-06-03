<div style="
	height: 100%;
  z-index: 99;
  width: 100%;
  display: flex;
  flex-direction: column;
  transition: all 250ms cubic-bezier(0.65, 0.05, 0.36, 1);
">
	<div style="background: #71AA29;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    position: relative;
    overflow: hidden;">
    <span style="    position: absolute;
    bottom: -51%;
    right: 18px;
    opacity: 0.1;
    font-size: 12em;
    color: white;"><i class="fas fa-receipt"></i></span>
	  <div style="    width: 100%;
	height: 3em;
	display: flex;
	flex-direction: row;
	justify-content: space-evenly;
	color: #fff;
	margin: 12px 0 20px 0;">
	    <h3>Invoice</h3>  
	  </div>
	  <div style="width: 100%;
	    display: grid;
	    grid-template-columns: 1fr 0.8fr;
	    padding: 0 1em;
	    color: #ffffff;">
	    <div style="text-align: left;">
	    	<p style="font-weight: 300; font-size: 14px; letter-spacing: 0.08em; color: #ffffffa6; margin: 0;"><span><?php echo $id_invoice ?></span></p>
	      <p style="font-size: 14px; font-weight: bold;"><span><?php echo $nama ?></span></p>
	      <h4 style="font-weight: 800; font-size: 24px; letter-spacing: 0.08em; margin: 0;">IDR <span id="valuetotalkonfirmasi"><?php echo $total_harga ?></span>,-</h4>
	      <p style="font-weight: 300; font-size: 14px; letter-spacing: 0.08em;"><?php echo $status_invoice ?></p>
	    </div>
	    <div style="text-align: center;">
	      <p style="font-weight: 300; font-size: 14px; letter-spacing: 0.08em; color: #ffffffa6;">DITERIMA</p>
	    </div>
	  </div>	
	</div>
	  
  <div style="width: 100%;
    background: #fff;
    height: 100%;
    padding: 14px 1em;
    display: flex;
    flex-direction: column;">
    <p style="font-size: 11px;">Silahkan lihat informasi dibawah untuk mengkonfirmasi bahwa data yang diinput benar</p>
    <div style="display: grid; grid-template-columns: 1fr 1fr;">
      <div>
        <div style="margin: 0px 0 8px 0;">
          <p class="p-value" id="tbtanggalAmbil"><?php echo $tanggal_pengambilan ?></p>
          <p class="p-title">Tanggal Pengambilan</p>  
        </div>
        <div style="margin: 5px 0;">
          <p class="p-value" id="tbjamAmbil"><?php echo $jam_ambil ?></p>
          <p class="p-title">Waktu Ambil</p>  
        </div>
      </div>
      <div>
        <div style="margin: 0px;">
          <p class="p-value" id="tbbatasAmbil"><?php echo $batas_pengambilan ?></p>
          <p class="p-title">Batas Pengambilan</p>  
        </div>
      </div>
    </div>
    <hr style="margin: 5px 0;">
    <div style="display: grid; grid-template-columns: 1fr 0.7fr;">
      <div>
        <div style="margin: 5px 0;">
          <p class="p-title">Alamat</p>  
          <p class="p-value" id="tbalamat" style="font-size: 12px;"><?php echo $alamat_user ?></p>
        </div>
      </div>
      <div>
        <div style="margin: 0px;">

        </div>
      </div>
    </div>
    <hr style="margin: 5px 0;">
    <div style="display: grid; grid-template-columns: 1fr 0.6fr;">
      <div>
        <p class="p-title">Pilihan Barang</p>
      </div>
      <div>
        <p class="p-title">Jumlah Harga</p>
      </div>
    </div>

    <div style="display: grid;
      grid-template-columns: 1fr 0.6fr;
      background: #F7F7F7;
      box-shadow: -2px 2px 2px rgb(0 0 0 / 25%);
      border-radius: 16px;
      padding: 9px 0.5em;
      margin: 4px -0.5em;">
      <div>
        <p class="p-value" style="font-size: 13px; margin: 0;"><?php echo $nama_produk ?></p>
        <p class="p-value" style="font-size: 10px; margin: 0;"><span id="jumlahtxt"><?php echo $jumbel ?></span> x <span id="hargabarang"><?php echo $harga ?></span></p>
      </div>
      <div>
        <p class="p-value" style="font-size: 13px;">Rp. <span id="tbsubtotal"><?php echo (intval($harga) * intval($jumbel));?></span></p>
      </div>
      <hr style="grid-column: 1/3; margin: 5px;">
      <div style="text-align: right; padding-right: 10px;">
        <p class="p-title">Pajak</p>
      </div>
      <div>
        <p class="p-value" style="font-size: 13px;">Rp. <span id="tbvalueppn">1000</span></p>
      </div>
      <hr style="grid-column: 1/2; margin: 5px 10px 5px 0;">
      <div>
        
      </div>
      <div style="text-align: right; padding-right: 10px;">
        <p class="p-title">Total</p>
      </div>
      <div>
        <p class="p-value" style="font-size: 13px;">Rp. <span id="tbtotal"><?php echo $total_harga;?></span></p>
      </div>
    </div>

    <p class="p-title" style="margin-top: 1em;">Metode Bayar</p>
    <div style="display: grid;
      grid-template-columns: 0.2fr 1fr;
      background: #F7F7F7;
      box-shadow: -2px 2px 2px rgb(0 0 0 / 25%);
      border-radius: 16px;
      padding: 9px 0.5em;
      margin: 4px -0.5em;">
      <div>
        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect width="30" height="30" rx="4" fill="white"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M18 7C19.306 7 20.418 7.835 20.83 9H12C10.6739 9 9.40215 9.52678 8.46447 10.4645C7.52678 11.4021 7 12.6739 7 14V18.83C6.41493 18.623 5.90842 18.2397 5.55024 17.7329C5.19206 17.226 4.99982 16.6206 5 16V10C5 9.20435 5.31607 8.44129 5.87868 7.87868C6.44129 7.31607 7.20435 7 8 7H18ZM22 11H12C11.2044 11 10.4413 11.3161 9.87868 11.8787C9.31607 12.4413 9 13.2044 9 14V20C9 20.7956 9.31607 21.5587 9.87868 22.1213C10.4413 22.6839 11.2044 23 12 23H22C22.7956 23 23.5587 22.6839 24.1213 22.1213C24.6839 21.5587 25 20.7956 25 20V14C25 13.2044 24.6839 12.4413 24.1213 11.8787C23.5587 11.3161 22.7956 11 22 11ZM19 17C19 17.5304 18.7893 18.0391 18.4142 18.4142C18.0391 18.7893 17.5304 19 17 19C16.4696 19 15.9609 18.7893 15.5858 18.4142C15.2107 18.0391 15 17.5304 15 17C15 16.4696 15.2107 15.9609 15.5858 15.5858C15.9609 15.2107 16.4696 15 17 15C17.5304 15 18.0391 15.2107 18.4142 15.5858C18.7893 15.9609 19 16.4696 19 17Z" fill="#89BF43"/>
        </svg>
      </div>
        <p class="p-value" style="font-size: 13px;line-height: 30px;"><span id="tbmetodebayar"><?php echo $metode_bayar ?></span></p>
    </div>
    
    <div style="display: flex; flex-direction: column; margin-top: 1em;">
      <p class="p-title">Catatan</p>
      <p class="p-value" id="tbcatatan" style="font-size: 11px;"><?php echo $catatan;?></p>
    </div>

    <button class="btn btn-success" id="btncetakinvoice" style="width: 100%;
        background: #89BF43;
        font-weight: 700;
        border: none;">Cetak</button>
    <a href="<?php echo base_url() ?>Petani/transaksi" class="btn btn-light link-to" style="width: 100%;
        font-weight: 700;
				border: 1px solid #cfcfcf;
        margin-top: 10px;">Kembali</a>
  </div>
</div>

	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <script src="<?php echo base_url() ?>assets/js/moment.js"></script>
    <script type="text/javascript">

    function spawnToast(string) {
      var toastElList = [].slice.call(document.querySelectorAll('.toast'))
      var toastList = toastElList.map(function(toastEl) {
      // Creates an array of toasts (it only initializes them)
        return new bootstrap.Toast(toastEl) // No need for options; use the default options
      });
      toastList.forEach((toast) => {
        toast.show();
        $('.toast').css('bottom',0);
      }); // This show them    
      $('#texttoast').text(string);
    }

    $(window).on('load',function() {
      $("#loading").removeClass("wait");
      console.log("loaded!");
    });

    $(".link-to").click(function(){
      $("#loading").addClass("wait");
    });

    $(".link-back").click(function(){
      $("#loading-back").addClass("wait-back");
    });

    </script>
  </body>
</html>