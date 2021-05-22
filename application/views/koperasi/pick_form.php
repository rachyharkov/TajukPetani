
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
        <div class="swiper-slide">
          <div class="product-detail-image-wrapper">
            <img src="<?php echo base_url() ?>img/detail-pic.png">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="product-detail-image-wrapper">
            <img src="<?php echo base_url() ?>img/detail-pic.png">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="product-detail-image-wrapper">
            <img src="<?php echo base_url() ?>img/detail-pic.png">
          </div>
        </div>
        <div class="swiper-slide">
          <div class="product-detail-image-wrapper">
            <img src="<?php echo base_url() ?>img/detail-pic.png">
          </div>
        </div>
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
    </div>
  </div>

  <div class="container-fluid" style="background: #F0EEEE;
  border-top-left-radius: 24px;
  border-top-right-radius: 24px; display:grid;grid-template-columns: 0.1fr 1fr 5em;
    grid-template-rows: repeat(6,auto);padding-top: 4vh;">
    <div style="grid-column-start: 1; grid-column-end: 4;">
      <p style="font-size: 15px;
      font-weight: bold;
      margin-bottom: 8px;">Form Pengambilan Barang</p>
    </div>
    <div style="grid-column-start: 1; grid-column-end: 4; margin-bottom: 6px;">
      <p style="font-size: 13px;
      font-weight: bold;
      margin: 0;">Koperasi Anugerah Jaya - KWI001/21 <span><img src="<?php echo base_url() ?>img/verified.svg" style="height: 12px;width:auto;"></span></p>
      <p style="font-size: 11px; margin:0;">Desa Harapan Jaya RT/RW.003/008 No.32</p>
    </div>
    <div>
      <img class="image-fluid" style="margin: 0.4em;
      width: 58px;
      height: auto;" src="<?php echo base_url() ?>img/detail-pic.png"/> 
    </div>
    <div style="padding-top: 10px;">
      <p style="font-size: 13px;
      font-weight: bold;
      margin: 0;">Nama Barang</p>
      <p style="font-size: 11px; margin:0;">Rp 85.000</p>
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
  </div>
</div>