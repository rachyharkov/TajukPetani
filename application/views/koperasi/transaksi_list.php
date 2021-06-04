        <div style="display: flex;
    width: 100%;
    position: fixed;
    top: 0;
    flex-direction: column;
    padding-bottom: 15px;
    border-bottom: 1px solid #e5e5e5;
    background-color: #ffffff;
    z-index: 9">
            <div style="width: 100%;
                padding: 2px 6px;
                box-shadow: rgb(99 99 99 / 20%) 0px 2px 8px 0px;
                display: grid;
                grid-template-columns: 0.2fr 1fr 0.2fr;">
                <a class="link-back" href="<?php echo base_url() ?>Home" style="font-size: 31px;
                color: #00000066;
                padding: 2px 15px;
                line-height: 8vh;"><i class="fas fa-angle-left"></i></a>
                <p style="margin: 3px 0;
                font-size: 21px;
                font-weight: 600;
                line-height: 8vh;">Transaksi</p>
            </div>
            <div style="width: 100%;
                padding: 16px;">
                <div class="search-box">
                    <form class='search-form'>
                        <button class='btn btn-link search-btn'>
                            <i class='fa fa-search'></i>
                        </button>
                        <input class='form-control' placeholder='Pupuk Organik GTX-750Ti' type='text'>
                    </form>
                </div>
            </div>
            
            <div class="filter-button-slide">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="margin: 0 !important;">
                    <li class="nav-item" role="presentation">
                        <button class="btn btn-light active" id="pills-SemuaTransaksi-tab" data-bs-toggle="pill" data-bs-target="#pills-alltransaksi" type="button" role="tab" aria-controls="pills-alltransaksi" aria-selected="true"><span style="margin: 0 3px;">Semua (<?php echo $hitungall ?>)</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn btn-light" id="pills-AktifTransaksi-tab" data-bs-toggle="pill" data-bs-target="#pills-aktiftransaksi" type="button" role="tab" aria-controls="pills-aktiftransaksi" aria-selected="true"><span style="margin: 0 3px;">Belum Dibayar (<?php echo $hitungbelumdibayar ?>)</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn btn-light" id="pills-DalamPerjalananTransaksi-tab" data-bs-toggle="pill" data-bs-target="#pills-dalamperjalanantransaksi" type="button" role="tab" aria-controls="pills-dalamperjalanantransaksi" aria-selected="true"><span style="margin: 0 3px;">Dalam Perjalanan (<?php echo $hitungdalamperjalanan ?>)</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn btn-light" id="pills-MenungguDiambilTransaksi-tab" data-bs-toggle="pill" data-bs-target="#pills-menunggudiambiltransaksi" type="button" role="tab" aria-controls="pills-menunggudiambiltransaksi" aria-selected="true"><span style="margin: 0 3px;">Menunggu Diambil (<?php echo $hitungmenunggudiambil ?>)</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn btn-light" id="pills-SelesaiTransaksi-tab" data-bs-toggle="pill" data-bs-target="#pills-SelesaiTransaksi" type="button" role="tab" aria-controls="pills-SelesaiTransaksi" aria-selected="true"><span style="margin: 0 3px;">Selesai (<?php echo $hitungselesai ?>)</button>
                    </li>
                </ul>
            </div>

        </div>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-alltransaksi" role="tabpanel" aria-labelledby="pills-alltransaksi-tab">
                <div style="width: 100%;
    margin-top: 15em;
    padding: 7px 0 0 0;
    overflow: hidden;">
            <?php
                foreach ($all as $v) {
                    $gambarnya = explode(';', $v->gambar);
                  ?>
	                <div class="product-list-wrapper">
	                    <div class="product-option-element" id="update-invoice-element<?php echo $v->id_pesanan ?>">
                            <div style="height: 100%;
                                width: 100%;
                                display: grid;
                                grid-template-columns:0.3fr 1fr 0.3fr;
                                position: relative;
                                grid-template-rows: 7em;">
                                <button id="btncancelstatusupdate<?php echo $v->id_pesanan ?>" style="    color: white;
                                    padding: 3px 5px 0 5px;
                                    text-align: center;
                                    border: none;
                                    background-color: #dc3545"><i class="fas fa-times"></i></button>
                                <div class="selectdiv">
                                  <label>
                                      <select id="comboboxstatusinvoicechoicefor<?php echo $v->id_pesanan ?>">
                                          <option selected>PILIH STATUS</option>
                                          <option value="BELUM DIBAYAR">Belum Dibayar</option>
                                          <option value="DALAM PERJALANAN">Dalam Perjalanan</option>
                                          <option value="MENUNGGU DIAMBIL">Menunggu Diambil</option>
                                          <option value="SELESAI">Selesai</option>
                                          <option value="DIBATALKAN">Tolak</option>
                                      </select>
                                  </label>
                                </div>
                                <button id="btnupdatestatusinvoice<?php echo $v->id_pesanan ?>" style="    color: white;
                                padding: 3px 5px 0 5px;
                                text-align: center;
                                border: none;
                                background-color: #27dd2f;"><i class="fas fa-check"></i></button>
                            </div>
                        </div>
                        <div class="product-option-element" id="option-lists<?php echo $v->id_pesanan ?>">
	                        <div style="height: 100%;
	                            width: 100%;
	                            display: grid;
	                            grid-template-columns: 1fr 1fr 1fr 0.3fr;
	                            position: relative;
	                            grid-template-rows: 7em;">
	                            <div>
	                                <button class="btnnavproductoption" id="btninitupdatestatusoption<?php echo $v->id_pesanan ?>">
	                                    <i class="fas fa-edit fa-3x" style="width: 23px;"></i>
	                                    <p style="margin: 8px 0;">Update</p>
	                                </button>
	                            </div>
	                            <div>
	                                <a class="btnnavproductoption" href="<?php echo base_url() ?>share">
	                                    <i class="fas fa-share-alt fa-3x" style="width: 23px;"></i>
	                                    <p style="margin: 8px 0;">Bagikan</p>
	                                </a>
	                            </div>
	                            <div>
	                                <button class="btnnavproductoption" id="btndelete<?php echo $v->id_pesanan ?>">
	                                    <i class="fas fa-trash fa-3x" style="width: 23px;"></i>
	                                    <p style="margin: 8px 0;">Batalkan</p>
	                                </button>
	                            </div>
	                            <button id="btncloseoptionfor<?php echo $v->id_pesanan ?>" style="color: gray;padding: 3px 5px 0 5px;text-align: center; border: none; background-color: transparent;"><i class="fas fa-times"></i></button>
	                        </div>
	                    </div>
	                    <img src="<?php echo base_url() ?>image-data/koperasi/<?php echo $gambarnya[0] ?>" style="display: block;
	                    width: 100%;
	                    height: 100%;
	                    object-fit: cover;"/>
	                    <div style="display: grid; grid-template-rows: 15px 15px 16px; padding-left: 10px;align-self: center;">
	                      <p style="font-size: 15px;font-weight: 600;"><?php echo $v->nama_produk ?></p>
	                      <p style="font-size: 11px;margin: 5px 0;">Total : <?php echo $v->harga ?></p>
	                      <p style="font-size: 11px;margin: 9px 0;">Batas : <?php echo $v->batas_pengambilan ?></p>
	                      <p style="font-size: 11px;margin: 9px 0;"><span class="badge 
                            <?php 
                                if($v->status_invoice == 'DIBATALKAN') {
                                    echo 'bg-danger';
                                }

                                if($v->status_invoice == 'DALAM PERJALANAN' || $v->status_invoice == 'BELUM DIBAYAR') {
                                    echo 'bg-warning';
                                }

                                if($v->status_invoice == 'SELESAI') {
                                    echo 'bg-success';
                                }
                        ?>"><?php echo $v->status_invoice ?></span></p>
	                    </div>
	                    <div style="width: 100%;grid-column-start: 1;grid-column-end: 3;padding: 10px 0; display: grid; grid-template-columns: 1fr <?php echo $v->status_invoice != 'DIBATALKAN' ? '1fr 0.2fr' : '0.1fr' ?>">
	                      <a href="<?php echo base_url().'Petani/view_invoice/'.$v->id_invoice ?>" style="color: gray;
	                        text-align: center;
	                        border: 1px solid gray;
	                        padding: 3px 18px;
	                        font-size: 13px;
	                        border-radius: 6px;
	                        font-weight: 700;
	                        display: block;margin-right: 5px;">Detail</a>
                        <?php
                        if($v->status_invoice != 'DIBATALKAN') {
                            ?> 
                                <a href="#" style="color: gray;
                                    text-align: center;
                                    border: 1px solid gray;
                                    padding: 3px 18px;
                                    font-size: 13px;
                                    border-radius: 6px;
                                    font-weight: 700;margin-left: 5px;">QR Code</a>

                            <?php
                        }
                        ?>
	                    <button id="btninitoptionfor<?php echo $v->id_pesanan ?>" href="#" style="color: gray;padding: 3px 5px 0 5px;text-align: center; border: none; background-color: transparent;"><i class="fas fa-ellipsis-v"></i></button>
	                    </div>
	                  </div>
	                  <?php
	                }
	            ?>       
	        	</div>

            </div>

            <div class="tab-pane fade" id="pills-aktiftransaksi" role="tabpanel" aria-labelledby="pills-AktifTransaksi-tab">
                <div style="width: 100%;
    margin-top: 15em;
    padding: 7px 0 0 0;
    overflow: hidden;">
                	<div style="height: 9.5em;
                text-align: center;">
	                    <p style="margin-top: 23%;
	                    transform: translateY(-50%);">Tidak ada transaksi</p>

	                </div>
                </div>
            </div>
            
            <div class="tab-pane fade" id="pills-menunggudiambiltransaksi" role="tabpanel" aria-labelledby="pills-menunggudiambiltransaksi-tab">
                <div style="width: 100%;
    margin-top: 15em;
    padding: 7px 0 0 0;
    overflow: hidden;">
                	<div style="height: 9.5em;
                text-align: center;">
	                    <p style="margin-top: 23%;
	                    transform: translateY(-50%);">Tidak ada transaksi</p>

	                </div>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-dalamperjalanantransaksi" role="tabpanel" aria-labelledby="pills-categorysembako-tab">
                <div style="width: 100%;
    margin-top: 15em;
    padding: 7px 0 0 0;
    overflow: hidden;">
                	<div style="height: 9.5em;
                text-align: center;">
	                    <p style="margin-top: 23%;
	                    transform: translateY(-50%);">Tidak ada transaksi</p>

	                </div>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-SelesaiTransaksi" role="tabpanel" aria-labelledby="pills-categorypestisida-tab">
                <div style="width: 100%;
    margin-top: 15em;
    padding: 7px 0 0 0;
    overflow: hidden;">
                	<div style="height: 9.5em;
                text-align: center;">
	                    <p style="margin-top: 23%;
	                    transform: translateY(-50%);">Tidak ada transaksi</p>

	                </div>
                </div>
            </div>
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <script type="text/javascript">

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

<?php 
foreach ($all as $v) {
?>  
    $('#btninitupdatestatusoption<?php echo $v->id_pesanan ?>').click(function() {
        $('#option-lists<?php echo $v->id_pesanan ?>').removeClass('productoptionactive');
        $('#update-invoice-element<?php echo $v->id_pesanan ?>').addClass('productoptionactive');
    });

    $('#btncancelstatusupdate<?php echo $v->id_pesanan ?>').click(function() {
        $('#option-lists<?php echo $v->id_pesanan ?>').addClass('productoptionactive');
        $('#update-invoice-element<?php echo $v->id_pesanan ?>').removeClass('productoptionactive');
    });
    
    $('#btnupdatestatusinvoice<?php echo $v->id_pesanan ?>').click(function() {
        window.location = '<?php echo base_url()?>koperasi/update_status_invoice/<?php echo $v->id_invoice ?>/' + $('#comboboxstatusinvoicechoicefor<?php echo $v->id_pesanan ?>').val();    
        Swal.fire('Berhasil','Mengubah Status Invoice Berhasil','success');
        window.location = '<?php echo base_url()?>koperasi/transaksi';
    })


    

    $('#btninitoptionfor<?php echo $v->id_pesanan ?>').click(function() {
        $('.product-option-element').removeClass('productoptionactive');
        $('#option-lists<?php echo $v->id_pesanan ?>').addClass('productoptionactive');
    });

    $('#btncloseoptionfor<?php echo $v->id_pesanan ?>').click(function() {
        $('#option-lists<?php echo $v->id_pesanan ?>').removeClass('productoptionactive');
    });

    $('#btndelete<?php echo $v->id_pesanan ?>').click(function() {
        Swal.fire({
          title: 'Batalkan transaksi <?php $v->id_invoice ?>',
          text: "Yakin ingin membatalkan transaksi yang sedang berlangung?",
          icon: 'question',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya, hapus'
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = "<?php echo base_url() ?>petani/update_status_invoice/<?php echo $v->id_invoice ?>/DIBATALKAN";
            Swal.fire('Dibatalkan','success');
          }
        })
    });
<?php 
}
?>

    var swiper = new Swiper('.swiper-container', {
      pagination: {
        el: '.swiper-pagination',
        dynamicBullets: true,
      },
    });
    </script>
  </body>
</html>