<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!--custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">

    <!--Plugin-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <title><?php echo $title; ?></title>
    <script src="https://kit.fontawesome.com/fd0c5ab4fe.js" crossorigin="anonymous"></script>
    <style>
        
    </style>
  </head>
  <body>
    <img class="bg-login" src="<?php echo base_url() ?>img/login-bg.png" style="position: fixed;
    top: 0;
    height: 100%;
    object-fit: cover;
    place-self: center;
    filter: brightness(0.7);
    transition: all 250ms cubic-bezier(0.22, 0.61, 0.36, 1);"/>
    <div id="warning-body">
        <img style="width: 104px;
        margin-top: 13em;
        place-self: center;" src="<?php echo base_url() ?>img/petani-phone.png">
        <p style="margin: auto;">Untuk pengalaman pengguna yang lebih baik, silahkan buka website ini di ponsel anda.</p>
        <div class="footer-warning-fun">
          <img src="<?php echo base_url() ?>img/footer-image.png" style="width: 100%; height: auto; display: block;">
          <p style="position: absolute;
            bottom: 4em;
            right: 34%;
            transform: translateY(50%);
            font-weight: bold;
            color: white;">By Kelompok 1 - Teknologi Informasi</p>
        </div>

    </div>
    <div id="loading" class="wait">
      <img src="<?php echo base_url() ?>img/loading.svg">
    </div>
    <div id="loading-back">
      <img src="<?php echo base_url() ?>img/loading.svg">
    </div>
    <div id="body" style="z-index: 1;
    position: relative;display: flex;
    flex-direction: column;
    flex-wrap: nowrap;">
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-3">
                        <a href="<?php echo base_url() ?>Home" class="link-back" style="padding: 0.7em; background: #F0EEEE;
                          border-radius: 8px; text-decoration: none; color: black; display: inline-block;"><i class="fas fa-chevron-left fa-fw"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="color: white;
        flex: 1 0 50%;
        min-height: 77vh;padding: 0 3vh;">
            <h1 style="margin: 2em 0;">Login TajukPetani System</h1>
            <div class="textwarning" style="width: 100%;"></div>
            <label id="labellogin" class="form-label">No Telepon</label>
            <input type="number" class="form-control" id="tbnotelp" aria-describedby="notelpHelp" style="border: none;
            border-radius: 65px;">
            <input type="number" class="form-control" id="tbotp" aria-describedby="otpHelp" style="border: none;
            border-radius: 65px; display: none;">
            <div id="texthelp" class="form-text" style="color: #e0e0e0;">Contoh: 081234567890</div>
            <p><a href="Lupa login anda?"></a></p>
            <button class="btn btn-success" id="btnloginbynotelf" style="width: 100%;
            background: #89BF43;
            font-weight: 700;
            border: none;">Selanjutnya</button>
            <button class="btn btn-success" id="btnreallogin" style="display: none; width: 100%;
            background: #89BF43;
            font-weight: 700;
            border: none;">Login</button>
            <p class="bpatext">Belum punya akun?</p>
            <a href="<?php echo base_url() ?>register" class="btn btn-light" style="width: 100%;
            font-weight: 700;
            border: none;">Daftar</a>
        </div>
        <div class="footer-login" style="text-align: center;">
            <p>Butuh bantuan? <a href="#" style="font-weight: bold; color: #89BF43;">Hubungi Tajuk Petani CS</a></p>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>
    <script type="text/javascript">

    var baseUrl = "<?= base_url();?>";
    var siteUrl = "<?= site_url();?>";

    $(window).on('load',function() {
      $("#loading").removeClass("wait");
      console.log("loaded!");
    });

    $(document).ready(function(){
      $(".link-to").click(function(){
        $("#loading").addClass("wait");
      });

      $("#btnprofile").click(function(e){
        $("#drawer-container").addClass("drawer-active");
        $('#body').css('opacity','0.2');
        e.preventDefault();
      });

      
      $('#btnclosedrawer').click(function(e){
        $("#drawer-container").removeClass("drawer-active");
        $('#body').css('opacity','1');
        e.preventDefault();
      });

      $('#btnloginbynotelf').click(function(){
        var tbnotelp = $("#tbnotelp").val();

        if(tbnotelp.length == "") {
          $('.textwarning').html('<div class="alert alert-danger alert-dismissible fade show" role="alert" style="font-size: 12px; padding: 8px;">Isi nomor HP anda yang ter-registrasi pada sistem kami<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="padding: 1em;"></button></div>');
          } else {
            $('#btnloginbynotelf').html('<div class="spinner-border spinner-border-sm text-light" role="status"></div>');
            
            $(this).attr('disabled','disabled');
            $.ajax({
                url:  baseUrl + "verification/loginkeun",
                type: "POST",
                data: {tbnotelp:tbnotelp},
                success:function(data){
                  if (data == "ok") {
                    $('#btnloginbynotelf').css('display','none');
                    $('#labellogin').html('Kode OTP');
                    $('#texthelp').html('');
                    $('.textwarning').html('<div class="alert alert-success alert-dismissible fade show" role="alert" style="font-size: 12px; padding: 8px;">Masukan kode OTP yang dikirim melalui SMS<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="padding: 1em;"></button></div>');
                    $('#tbnotelp').css('display','none');
                    $('#tbotp').css('display','block');
                    $('#btnreallogin').css('display','block');
                  } else {
                    $('.textwarning').html('<div class="alert alert-danger alert-dismissible fade show" role="alert" style="font-size: 12px; padding: 8px;">Nomor Telefon tidak terdaftar di sistem kami<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="padding: 1em;"></button></div>');
                    $('#btnloginbynotelf').html('Selanjutnya');
                    $('#btnloginbynotelf').removeAttr('disabled');
                  }
                  console.log(data);
                },
                error:function(data){
                $('.textwarning').html('<div class="alert alert-danger alert-dismissible fade show" role="alert" style="font-size: 12px; padding: 8px;">Kesalahan terjadi, mohon coba lagi nanti<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="padding: 1em;"></button></div>');
                console.log(data);
                $('#btnloginbynotelf').html('Selanjutnya');
                $('#btnloginbynotelf').removeAttr('disabled');
              }
            });
          }
      });

      $("#btnreallogin").click(function(){
        var tbnotelp = $("#tbnotelp").val();
        var tbotp = $("#tbotp").val();
        
        $.ajax({
          url:  baseUrl + "verification/checkpassword",
          type: "POST",
          data: {'<?php echo $this->security->get_csrf_token_name(); ?>':'<?php echo $this->security->get_csrf_hash(); ?>',tbnotelp:tbnotelp,tbotp:tbotp},
          success:function(data){
          	if(data == "petani"){
                $("#loading").addClass("wait");
                window.location.href = baseUrl + "petani/index";  
            } else if (data == "koperasi") {
              $("#loading").addClass("wait");
              window.location.href = baseUrl + "home/index";
            } else if(data == "admin") {
              Swal.fire({
                type: 'error',
                title: 'Login Gagal!',
                text: 'Ngapain njir!'
              });
            } else {
              $('.textwarning').html('<div class="alert alert-danger alert-once alert-dismissible fade show" role="alert" style="font-size: 12px; padding: 8px;">Kode OTP salah, mohon cek kembali<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="padding: 1em;"></button></div>');
            }
            console.log(data);
            }
          })
      });
      
    })
    </script>
  </body>
</html>