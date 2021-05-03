        
    </div>
    <div class="container-fluid footer" style="position: sticky; bottom: 0; background: white;">
      <div class="row">
        <div class="col-7" style="padding: 12px;">
          <p style="margin: 0; font-size: 17px; font-weight: bold;">Rp.25.000,-</p>
          <p style="font-size: 8px; margin: 0;">Harga untuk per-item nya</p>
        </div>
        <div class="col-5" style="padding: 12px;">
          <a href="<?php echo base_url() ?>Home/pick_form" class="btn btn-success link-to" style="background: #89BF43;">Ambil Barang</a>
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

    var swiper = new Swiper('.swiper-container', {
      pagination: {
        el: '.swiper-pagination',
        dynamicBullets: true,
      },
    });
    </script>
  </body>
</html>