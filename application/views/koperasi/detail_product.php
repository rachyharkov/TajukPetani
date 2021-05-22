
<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <a href="<?php echo base_url() ?>Home" class="link-back" style="padding: 0.7em; background: #F0EEEE;
                  border-radius: 8px; text-decoration: none; color: black; display: inline-block;"><i class="fas fa-chevron-left fa-fw"></i></a>
            </div>
            <div class="col-9" style="text-align: right;">
                <div class="wrapper-pp">
                    <a href="#">
                        <img class="img-fluid" src="<?php echo base_url() ?>img/profile-p.png" style="width: 7vh;"/>
                    </a>
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
        
        <!--
        add more images below
        <div class="swiper-slide">
          <div class="product-detail-image-wrapper">
            <img src="<?php //echo base_url() ?>img/detail-pic.png">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="product-detail-image-wrapper">
            <img src="<?php //echo base_url() ?>img/detail-pic.png">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="product-detail-image-wrapper">
            <img src="<?php //echo base_url() ?>img/detail-pic.png">
          </div>
        </div>-->
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
    </div>
  </div>

  <div class="container-fluid" style="background: #F0EEEE;
  border-top-left-radius: 24px;
  border-top-right-radius: 24px; display:grid; grid-template-columns: 0.1fr 1fr;
  grid-template-rows: repeat(6,auto);padding-top: 4vh;">
    <div>
      <img class="image-fluid" style="margin: 1em;" src="<?php echo base_url() ?>img/box.png"/> 
    </div>
    <div>
      <p style="font-size: 13px;
      font-weight: bold;
      margin: 0;">Ambil barang langsung ke Koperasi</p>
      <p style="font-size: 11px; margin:0;">Buat janji untuk  transaksi dan mengambil barang di koperasi setempat </p>
    </div>
    <div>
      <img class="image-fluid" style="margin: 1em; width: 25px; height: auto;" src="<?php echo base_url() ?>img/house.png"/> 
    </div>
    <div style="padding-top: 10px;">
      <p style="font-size: 13px;
      font-weight: bold;
      margin: 0;"><?php echo $nama_koperasi; ?><span><img src="<?php echo base_url() ?>img/verified.svg" style="height: 12px;width:auto;"></span></p>
      <p style="font-size: 11px; margin:0;"><?php echo $alamat_koperasi; ?></p>
    </div>
    <div style="
    grid-column-start: 1;
    grid-column-end: 3;
    min-height: 200px;
    overflow: auto;
    margin-top: 15px;padding: 0 15px;">
      <p style="font-size: 17px; font-weight: bold;"><?php echo $nama_produk; ?></p>
      <p style="font-size: 13px; font-weight: bold;margin: 1rem 0 1vh 0;">Detail Produk</p>
      <table style="font-size: 12px;">
        <tr>
          <td style="width: 60%;">Kondisi</td>
          <td><?php echo $kondisi; ?></td>
        </tr>
        <tr>
          <td>Min. Pemesanan</td>
          <td><?php echo $min_pemesanan; ?></td>
        </tr>
        <tr>
          <td>Berat</td>
          <td><?php echo $berat; ?></td>
        </tr>
        <tr>
          <td>Jenis Satuan</td>
          <td><span class="badge" style="font-size: 8px;background-color: #89BF43;"><?php echo $jenis_satuan ?></span></td>
        </tr>
        <tr>
          <td>Varian</td>
          <td><?php echo $varian; ?></td>
        </tr>
        <tr>
          <td>Status Ketersediaan</td>
          <td><?php echo $stok == 0 ? 'Kosong' : $stok; ?></td>
        </tr>
        <tr>
          <td>Jenis Bantuan</td>
          <td><?php echo $jenis_bantuan ?></td>
        </tr>
        <tr>
          <td>Rating</td>
          <td style="font-size: 9px;
          text-align: left;">
              <span class="fa fa-star <?php echo $rating <= 1 ? '':'checked'; ?>"></span>
              <span class="fa fa-star <?php echo $rating <= 2 ? '':'checked'; ?>"></span>
              <span class="fa fa-star <?php echo $rating <= 3 ? '':'checked'; ?>"></span>
              <span class="fa fa-star <?php echo $rating <= 4 ? '':'checked'; ?>"></span>
              <span class="fa fa-star <?php echo $rating <= 5 ? '':'checked'; ?>"></span>
          </td>
        </tr>
      </table>

      <p style="font-size: 13px; font-weight: bold;margin: 1rem 0 1vh 0;">Deskripsi</p>
      <p style="font-size: 12px;"><?php echo $deskripsi; ?></p>
    </div>
  </div>
</div>