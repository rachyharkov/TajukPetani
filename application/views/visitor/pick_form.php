
      <div class="header">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-3">
                      <a href="<?php echo base_url() ?>Home" class="link-back" style="padding: 0.7em; background: #F0EEEE;
                        border-radius: 8px; text-decoration: none; color: black; display: inline-block;"><i class="fas fa-chevron-left fa-fw"></i></a>
                  </div>
                  <div class="col-9" style="text-align: right;">
                      <div class="wrapper-pp">
                          <!--what's here?-->
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="container-fluid" style="padding: 0;">
        <div class="container-fluid">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <?php
              $gambar = explode(';', $gambar);
              foreach ($gambar as $gam) {
                ?>
                  <div class="swiper-slide">
                    <div class="product-detail-image-wrapper">
                      <img src="<?php echo base_url() ?>image-data/koperasi/<?php echo $gam ?>">
                    </div>
                  </div>
                <?php
              }
              ?>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <div class="container-fluid form-pick-container">
          <div style="grid-column-start: 1; grid-column-end: 4;">
            <p style="font-size: 15px;
            font-weight: bold;
            margin-bottom: 8px;">Form Pengambilan Barang</p>
          </div>
          <div style="grid-column-start: 1; grid-column-end: 4; margin-bottom: 6px;">
            <p style="font-size: 13px;
            font-weight: bold;
            margin: 0;"><?php echo $nama_koperasi; ?><span> <img src="<?php echo base_url() ?>img/verified.svg" style="height: 12px;width:auto;"></span></p>
            <p style="font-size: 11px; margin:0;"><?php echo $alamat_koperasi; ?></p>
          </div>
          <div>
            <img class="image-fluid" style="margin: 0.4em;
            width: 58px;
            height: auto;" src="<?php echo base_url() ?>image-data/koperasi/<?php echo $gambar[0] ?>"/> 
          </div>
          <div style="padding-top: 10px;">
            <p style="font-size: 13px;
            font-weight: bold;
            margin: 0;"><?php echo $nama_produk; ?></p>
            <p style="font-size: 11px; margin:0;">Rp <?php echo $harga; ?></p>
          </div>
          <div style="display: flex;
          margin: auto;">
            <button id="btn-decrease" style="border: 2px solid rgba(0, 0, 0, 0.4);
            border-radius: 1.2em;
            height: 25px;
            width: 25px;
            position: relative;"><span style="position: absolute;top: -2px;
          left: 7px;">-</span></button><input class="tbnominal" type="number" name="nominal" value="0" style="
          outline: none;
          text-align: center;
          width: 27%;
          border: 0px solid #000000;
          border-bottom-width: 1px;
          background-color: transparent;padding: 0;
          margin: 0 5px;"><button id="btn-increase" style="border: 2px solid #89BF43;
            border-radius: 1.2em;
            height: 25px;
            width: 25px;
            position: relative;"><span style="position: absolute;top: -2px;left: 5px; font-weight: bold; color:#89BF43">+</span></button>
          </div>
          <div style="grid-column: 1/4;">
            <p style="margin: 1rem 0 7px 0;font-weight: 600;">Pilih Hari  <span id="pilihhariwarn" style="font-size: 11px; color: red; display: none;"> *Harap pilih hari pengambilan</span></p>
            <div style="display: flex; flex-wrap: wrap;">
              <?php
              $date = date('Y-m-d'); //today date
              $arrayHari = array();
              $arrayTanggal = array();
              for($i =1; $i <= 7; $i++){
                  $arrayHari[] = getDate_choice(date('Y-m-d', strtotime("+$i day", strtotime($date))));
                  $arrayTanggal[] = date('d/m/Y', strtotime("+$i day", strtotime($date)));
              }
              $o = 0;
              foreach ($arrayHari as $hari) {
                ?>
                <div class="radio-group">
                 <input class="inputRadio" type="radio" id="option<?php echo $hari ?>" value="<?php echo $arrayTanggal[$o] ?>" name="selectorhari">
                 <label class="labelRadio" for="option<?php echo $hari ?>"><?php echo $hari ?></label>
                </div>
                <?php
                $o++;
              }
              ?>
            </div>
          </div>
          <div style="grid-column: 1/4;">
            <p style="margin: 1rem 0 7px 0;font-weight: 600;">Pilih Waktu <span id="pilihjamwarn" style="font-size: 11px; color: red; display: none;"> *Harap pilih jam pengambilan</span></p>
            <div style="display: flex; flex-wrap: wrap;">
              <?php
              $arrayJam = ["07.00","09.00","11.00","13.00","15.00","17.00"];
              foreach ($arrayJam as $jam) {
                ?>
                <div class="radio-group">
                 <input class="inputRadio" type="radio" id="option<?php echo $jam ?>" value="<?php echo $jam ?>" name="selectorjam">
                 <label class="labelRadio" for="option<?php echo $jam ?>"><?php echo $jam ?></label>
                </div>
                <?php
              }
              ?>
            </div>
          </div>

          <div style="grid-column: 1/4;">
            <p style="margin: 1rem 0 7px 0;font-weight: 600;">Pilih Metode Bayar <span id="pilihmetodebayarwarn" style="font-size: 11px; color: red; display: none;"> *Harap pilih metode bayar anda</span></p>
            <div style="display: flex; flex-wrap: wrap;">
              <?php
              $arrayMetodeBayar = ["Bayar di Koperasi","Saldo Koperasi","Transfer Bank"];
              foreach ($arrayMetodeBayar as $metodebayar) {
                ?>
                <div class="radio-group">
                 <input class="inputRadio" type="radio" id="option<?php echo $metodebayar ?>" value="<?php echo $metodebayar ?>" name="selectormetodebayar">
                 <label class="labelRadio" for="option<?php echo $metodebayar ?>"><?php echo $metodebayar ?></label>
                </div>
                <?php
              }
              ?>
            </div>
          </div>

          <div style="grid-column: 1/4;">
            <p style="margin: 1rem 0 7px 0;font-weight: 600;">Ada Catatan?</p>
            <textarea class="textarea" id="textareacatatadan"></textarea>
          </div>

        </div>
      </div>
        
    </div>
    <div class="container-fluid footer" style="position: sticky; bottom: 0; background: white;">
      <div class="row">
        <div class="col-7" style="padding: 12px;">
          <p id="texttotalharga" style="margin: 0; font-size: 17px; font-weight: bold;">Rp. <span id="valuetotal">0</span>,-</p>
          <p style="font-size: 8px; margin: 0;">Harga x Total Pembelian</p>
        </div>
        <div class="col-5" style="padding: 12px;">
          <button class="btn btn-success" id="btn-spawn-confirmation-window" style="background: #89BF43; border: none;width: 100%;">Pesan</button>
        </div>    
      </div>
    </div>
<?php
foreach ($qinfo as $k) {
  ?>
    <div id="confirmation-window" class="confirmation-element">
      <div style="width: 100%;
    height: 2em;
    text-align: center;
    margin-top: -4vh;
    position: relative;
    display: flex;">
        <button style="height: 5px;
    width: 43%;
    border: none;
    border-radius: 26px;
    display: block;
    margin: auto;" id="btn-close-confirmation-window"></button>
        
      </div>
      <div style="    width: 100%;
height: 3em;
display: flex;
flex-direction: row;
justify-content: space-evenly;
color: #fff;
margin: 12px 0 20px 0;">
        <h3>Konfirmasi</h3>  
      </div>
      <div style="width: 100%;
        display: grid;
        grid-template-columns: 1fr 0.8fr;
        padding: 0 1em;
        color: #ffffff;">
        <div style="text-align: left;">
          <p style="font-size: 14px; font-weight: bold;">A/N <span><?php echo $k->nama ?></span></p>
          <h4 style="font-weight: 800; font-size: 24px; letter-spacing: 0.08em; margin: 0;">IDR <span id="valuetotalkonfirmasi">0</span>,-</h4>
          <p style="font-weight: 300; font-size: 14px; letter-spacing: 0.08em;">PERLU DIBAYAR</p>
        </div>
        <div style="text-align: center;">
          <p style="font-weight: 300; font-size: 14px; letter-spacing: 0.08em; color: #ffffffa6;">PRATINJAU</p>
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
              <p class="p-value" id="tbtanggalAmbil"></p>
              <p class="p-title">Tanggal Pengambilan</p>  
            </div>
            <div style="margin: 5px 0;">
              <p class="p-value" id="tbjamAmbil"></p>
              <p class="p-title">Waktu Ambil</p>  
            </div>
          </div>
          <div>
            <div style="margin: 0px;">
              <p class="p-value" id="tbbatasAmbil"></p>
              <p class="p-title">Batas Pengambilan</p>  
            </div>
          </div>
        </div>
        <hr style="margin: 5px 0;">
        <div style="display: grid; grid-template-columns: 1fr 0.7fr;">
          <div>
            <div style="margin: 5px 0;">
              <p class="p-title">Alamat</p>  
              <p class="p-value" id="tbalamat" style="font-size: 12px;"><?php echo $k->alamat_user  ?></p>
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
            <p class="p-value" style="font-size: 10px; margin: 0;"><span id="jumlahtxt">0</span> x <span id="hargabarang"><?php echo $harga ?></span></p>
          </div>
          <div>
            <p class="p-value" style="font-size: 13px;">Rp. <span id="tbsubtotal">0</span></p>
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
            <p class="p-value" style="font-size: 13px;">Rp. <span id="tbtotal">0</span></p>
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
            <p class="p-value" style="font-size: 13px;line-height: 30px;"><span id="tbmetodebayar">choice</span></p>
        </div>
        
        <div style="display: flex; flex-direction: column; margin-top: 1em;">
          <p class="p-title">Catatan</p>
          <p class="p-value" id="tbcatatan" style="font-size: 11px;">asdadsadsad</p>
        </div>

        <button class="btn btn-success" id="btnkonfirmasipesanan" style="width: 100%;
            background: #89BF43;
            font-weight: 700;
            border: none;">Ajukan</button>

      </div>
    </div>
<?php
  }
?>
    <div class="toast align-items-center text-white bg-secondary border-0" role="alert" aria-live="assertive" aria-atomic="true" style="position: fixed;
    bottom: -100%;
    width: 100%;
    height: 10vh;
    line-height: 6vh;">
      <div class="d-flex">
        <div class="toast-body">
          <span id="texttoast">Hello, world! This is a toast message.</span>
        </div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
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

    let jumlah = 0;
    const harga = <?php echo $harga ?>;
    

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

    $('.tbnominal').keyup(function() {
      if ($('.tbnominal').val() > <?php echo $stok; ?>) {
        alert('udah, stoknya cuman segitu');
        $('.tbnominal').css('border-bottom','1px solid #dc3545').val(<?php echo $stok; ?>);
        return;
      }

      if ($('.tbnominal').val() <= <?php echo $stok; ?>) {
        $('.tbnominal').css('border-bottom','1px solid #000000');
      }

      jumlah = $('.tbnominal').val();
    });

    $('#btn-decrease').click(function() {
      if (jumlah <= 0) {
        alert('udah, jan dikurangin lagi');
        return;
      }
      jumlah--;
      $('.tbnominal').val(jumlah);
      $('#jumlahtxt').text(jumlah);
      $('#tbsubtotal').text(harga * jumlah);
      $('#valuetotal').text(harga * jumlah);
      $('#valuetotalkonfirmasi').text(harga * jumlah);
    });

    $('#btn-increase').click(function() {
      if (jumlah > <?php echo $stok; ?>) {
        alert('udah, stoknya cuman segitu');
        return;
      }
      jumlah++;
      $('.tbnominal').val(jumlah);
      $('#tbsubtotal').text(harga * jumlah);
      $('#jumlahtxt').text(jumlah);
      $('#valuetotal').text(harga * jumlah);
      $('#valuetotalkonfirmasi').text(harga * jumlah);
    });

    $(document).ready(function(){
      $('.tbnominal').val(jumlah);
    })

    $('input[name="selectorhari"]').change(function() {
      if ($(this).is(':checked')) {
        var val = $(this).val();
        var split = val.split('/')
        var targetDate = new Date(`${split[1]}/${split[0]}/${split[2]}`); //bulan/tanggal/taun
        targetDate.setDate((targetDate.getDate() + 5));
        
        //console.log(moment(targetDate).format('DD/MM/YYYY'));
        $('#tbbatasAmbil').text(moment(targetDate).format('DD/MM/YYYY'));
        $('#tbtanggalAmbil').text(val);
        $('#pilihhariwarn').css('display','none');
      }
    });

    $('input[name="selectorjam"]').change(function() {
      if ($(this).is(':checked')) {
        var val = $(this).val();
        $('#tbjamAmbil').text(val);
        $('#pilihjamwarn').css('display','none');
      }
    });

    $('input[name="selectormetodebayar"]').change(function() {
      if ($(this).is(':checked')) {
        var val = $(this).val();
        $('#tbmetodebayar').text(val);
        $('#pilihmetodebayarwarn').css('display','none');
      }
    });

    $('#btn-spawn-confirmation-window').click(function(){

      if(!$('input[name="selectorhari"]').is(':checked')){
        $('#pilihhariwarn').css('display','initial');
        spawnToast('Pilih hari pengambilan');
        return;
      }
      if(!$('input[name="selectorjam"]').is(':checked')){
        $('#pilihjamwarn').css('display','initial');
        spawnToast('Pilih jam pengambilan');
        return;
      }
      if(!$('input[name="selectormetodebayar"]').is(':checked')){
        $('#pilihmetodebayarwarn').css('display','initial');
        spawnToast('Pilih metode bayar');
        return;
      }

      if ($('.tbnominal').val() < 1) {
        $('.tbnominal').css('border-bottom','1px solid #dc3545');
        spawnToast('Berapa stok yang ingin diambil?');
        return; 
      }

      $('#confirmation-window').css('bottom','0%');

      var total = parseInt($('#tbsubtotal').text()) + parseInt($('#tbvalueppn').text());

      $('#tbtotal').text(total);

      var valuecatatan = $('#textareacatatadan').val();
      $('#tbcatatan').text(valuecatatan);
    });

    $('#btn-close-confirmation-window').click(function(){
      $('#confirmation-window').css('bottom','-100%');
    });

    var swiper = new Swiper('.swiper-container', {
      pagination: {
        el: '.swiper-pagination',
        dynamicBullets: true,
      },
    });

    $('#btnkonfirmasipesanan').click(function(){
        $("#btnkonfirmasipesanan").css({
            'opacity':'0.6',
            'pointer-events':'none'
        }).html('<i class="fas fa-circle-notch fa-spin"></i>');
        
        var iduser = '<?php echo $this->session->userdata('id_user'); ?>';
        var idproduk = '<?php echo $id_produk ?>';
        var jumbel = jumlah;
        var tanggalambil = $('#tbtanggalAmbil').text();
        var batasambil = $('#tbbatasAmbil').text();
        var jamambil = $('#tbjamAmbil').text();
        var totalharga = $('#tbtotal').text();
        var metodebayar = $('#tbmetodebayar').text();
        var catatan = $('#textareacatatadan').val();
        //pass object in post

        var dataString = {'iduser': iduser , 'idproduk': idproduk , 'jumbel': jumbel , 'tanggalambil': tanggalambil,'jamambil': jamambil,'totalharga': totalharga, 'metodebayar': metodebayar,'catatan': catatan};
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>petani/insert_product_operation",
            data: dataString,
            dataType: 'json',
            cache: false,
            success: function(result){
              alert(result.msg);
            },
            error: function(e){
              $("#btnkonfirmasipesanan").css({
                  'opacity':'1',
                  'pointer-events':'auto'
              }).html('Ajukan');
              $('#confirmation-window').css('bottom','-100%');
              spawnToast('Terjadi kesalahan');
            }
        });
        return false;
    })
    </script>
  </body>
</html>