        
    </div>
    <div class="container footer" style="padding: 13px 0;text-align: center;">
        <p>By Kelompok 1 - Teknologi Informasi</p>
    </div>
    <div class="bottom-nav">
      <div class="bottom-nav-wrapper">
        <button class="btn-nav active-bottom-nav" id="home">
          <span class="iconify" data-inline="false" data-icon="fluent:home-16-filled" style="color: #00000030;display: block;"></span>
          <p>Beranda</p>
          <!--<span class="iconify" data-inline="false" data-icon="fluent:home-12-regular" style="color: #89BF43;display: block;"></span>-->
        </button>
      </div>
      <div class="bottom-nav-wrapper">
        <button class="btn-nav" id="koperasi_menu">
          <span class="iconify" data-inline="false" data-icon="fluent:text-bullet-list-square-20-regular" style="color: #00000030; display: block;"></span>
          <p>Koperasi</p>
          <!--<span class="iconify" data-inline="false" data-icon="fluent:cart-16-filled" style="color: #00000030;display: block;"></span>-->
        </button>
      </div>
      <div class="bottom-nav-wrapper">
        <button class="btn-nav" id="order_menu">
          <span class="iconify" data-inline="false" data-icon="fluent:cart-16-regular" style="color: #00000030;display: block;"></span>
          <p>Pesanan</p>
          <!--<span class="iconify" data-inline="false" data-icon="fluent:cart-16-filled" style="color: #00000030;display: block;"></span>-->
        </button>
      </div>
      <div class="bottom-nav-wrapper">
        <button class="btn-nav" id="account_menu">
          <span class="iconify" data-inline="false" data-icon="fluent:inprivate-account-16-regular" style="color: #00000030; display: block;"></span>
          <p>Akun</p>
          <!--<span class="iconify" data-inline="false" data-icon="fluent:inprivate-account-16-filled" style="color: #00000030;"></span>-->
        </button>
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
    <script type="text/javascript">
    
    /*function getPage(datas){
      var mydiv = datas;
      url = "<?php echo base_url('/Home');?>/" + mydiv;
      $('#body').load(url);
    }*/
    
    $(window).on('load',function() {
      $("#loading").removeClass("wait");
      console.log("loaded!");
    });

    $(document).ready(function(){
      $(".link-to").click(function(){
        $("#loading").addClass("wait");
      });

      $('.btn-nav').click(function(){
        console.log(this.id);
        $('#loading-nav-menu').css('display','block');
        $('.btn-nav').removeClass('active-bottom-nav');
        $('#'+this.id+'').addClass('active-bottom-nav');
        
        $.ajax({
          type: 'get',
          url: "<?php echo base_url('/Home');?>/" + this.id,
          dataType: 'html',
          success: function (html) {
            // success callback -- replace the div's innerHTML with
            // the response from the server.
            $('#body').html(html);
            $('#loading-nav-menu').css('display','none');
          },
          error: function (data) {
            $('#body').html(data.status);
            $('#loading-nav-menu').css('display','none');
          }
        });
        
      });


      var swiper = new Swiper('.swiper-container', {
        pagination: {
          el: '.swiper-pagination',
          dynamicBullets: true,
        },
      });
    })
    </script>
  </body>
</html>