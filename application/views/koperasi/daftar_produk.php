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
                line-height: 8vh;">Produk Koperasi</p>
                <a class="link-to" href="#" style="font-size: 23px;
                color: #00000066;
                margin: auto;
                padding: 11px;"><i class="fas fa-plus"></i></a>
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
            <p style="margin: 0 3vh;">Total Produk : 69</p>
        </div>
        <div style="width: 100%; margin-top: 30vh; padding: 0;">
            <?php
                foreach ($products as $v) {
                    $gambarnya = explode(';', $v->gambar);
                  ?>
                  <div class="product-list-wrapper">
                    <img src="<?php echo base_url() ?>image-data/koperasi/<?php echo $gambarnya[0] ?>" style="display: block;
                    width: 100%;
                    height: 100%;
                    object-fit: cover;"/>
                    <div style="display: grid; grid-template-rows: 15px 15px 16px; padding-left: 10px;align-self: center;">
                      <p style="font-size: 15px;font-weight: 600;"><?php echo $v->nama_produk ?></p>
                      <p style="font-size: 11px;margin: 5px 0;">Rp.<?php echo $v->harga.'/'.$v->jenis_satuan ?></p>
                      <p style="font-size: 11px;margin: 9px 0;">Stok: <?php echo $v->stok ?></p>
                    </div>
                    <div style="width: 100%;grid-column-start: 1;grid-column-end: 3;padding: 10px 0; display: grid; grid-template-columns: 1fr 1fr 0.2fr">
                      <a href="#" style="color: gray;
                        text-align: center;
                        border: 1px solid gray;
                        padding: 3px 18px;
                        font-size: 13px;
                        border-radius: 6px;
                        font-weight: 700;
                        display: block;margin-right: 5px;">Ubah Harga</a>
                    <a href="#" style="color: gray;
                        text-align: center;
                        border: 1px solid gray;
                        padding: 3px 18px;
                        font-size: 13px;
                        border-radius: 6px;
                        font-weight: 700;margin-left: 5px;">Ubah Stok</a>
                    <a href="#" style="color: gray;padding: 3px 5px 0 5px;text-align: center;"><i class="fas fa-ellipsis-v"></i></a>
                    </div>
                  </div>
                  <?php
                }
            ?>       
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