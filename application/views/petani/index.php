
        <div class="header">
            <?php foreach($qinfo as $i) {

            ?>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-9">
                        <h4 style="font-size: 3vh;
                        margin: 0; font-weight: bold;"><?php
                        $t = date("H");

                        if ($t < "11") {
                          echo "Selamat Pagi, ";
                        } elseif ($t < "15") {
                          echo "Selamat Siang, ";
                        } elseif ($t < "18") {
                          echo "Selamat Sore, ";
                        } else {
                          echo "Selamat Malam, ";
                        }
                        ?><?php echo $i->nama?>!</h4>
                        <p style="font-size: 2vh;">Portal Tajuk Petani untuk <?php echo $i->role?></p>
                    </div>
                    <div class="col-3" style="text-align: right;">
                        <div class="wrapper-pp">
                            <a id="btnprofile" href="#">
                                <img class="img-fluid" src="<?php echo base_url() ?>img/profile-p.png" style="width: 7vh;"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            } ?>
            <div class="container" style="margin-top: 10px;">
                <div class="search-box">
                    <form class='search-form'>
                        <button class='btn btn-link search-btn'>
                            <i class='fa fa-search'></i>
                        </button>
                        <input class='form-control' placeholder='Pupuk Organik GTX-750Ti' type='text'>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <h4 style="font-weight: bold;">Kategori</h4>
            <div class="category-button-slide">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="btn btn-light active" id="pills-PupukCategory-tab" data-bs-toggle="pill" data-bs-target="#pills-category-pupuk" type="button" role="tab" aria-controls="pills-category-pupuk" aria-selected="true"><span style="margin: 0 3px;"><img src="<?php echo base_url() ?>img/pupuk.png" style="height: 21px; margin-bottom: 5px;"/></span>Pupuk</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn btn-light" id="pills-BibitCategory-tab" data-bs-toggle="pill" data-bs-target="#pills-category-bibit" type="button" role="tab" aria-controls="pills-category-bibit" aria-selected="true"><span style="margin: 0 3px;"><img src="<?php echo base_url() ?>img/bibit.png" style="height: 21px; margin-bottom: 5px;"/></span>Bibit</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn btn-light" id="pills-UMKMCategory-tab" data-bs-toggle="pill" data-bs-target="#pills-category-UMKM" type="button" role="tab" aria-controls="pills-category-UMKM" aria-selected="true"><span style="margin: 0 3px;"><img src="<?php echo base_url() ?>img/house.png" style="height: 21px; margin-bottom: 5px;"/></span>UMKM</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn btn-light" id="pills-UMKMCategory-tab" data-bs-toggle="pill" data-bs-target="#pills-category-UMKM" type="button" role="tab" aria-controls="pills-category-UMKM" aria-selected="true"><span style="margin: 0 3px;"><img src="<?php echo base_url() ?>img/house.png" style="height: 21px; margin-bottom: 5px;"/></span>Bibit</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn btn-light" id="pills-UMKMCategory-tab" data-bs-toggle="pill" data-bs-target="#pills-category-UMKM" type="button" role="tab" aria-controls="pills-category-UMKM" aria-selected="true"><span style="margin: 0 3px;"><img src="<?php echo base_url() ?>img/house.png" style="height: 21px; margin-bottom: 5px;"/></span>Pupuk</button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container" style="margin-top: 14px;">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-category-pupuk" role="tabpanel" aria-labelledby="pills-categorypupuk-tab">
                    <h4 style="font-weight: bold;">Pupuk Unggulan</h4>
                    <div class="row-fluid">
                        <div class="category-product-slider">
                            <?php
                            foreach($listfiveproductspupuk as $v) {

                            ?>
                            <div class="category-product-wrapper">
                                <div class="image-product-category">
                                    <img src="<?php echo base_url() ?>img/pupuk-organik-5.jpg"/>
                                </div>
                                <div class="product-category-overview">
                                    <table style="width: 100%;">
                                        <tr>
                                            <td style="font-size: 9px;
                                            text-align: left;
                                            padding-top: 8px;">
                                                <span class="fa fa-star <?php echo $v->rating <= 1 ? '':'checked'; ?>"></span>
                                                <span class="fa fa-star <?php echo $v->rating <= 2 ? '':'checked'; ?>"></span>
                                                <span class="fa fa-star <?php echo $v->rating <= 3 ? '':'checked'; ?>"></span>
                                                <span class="fa fa-star <?php echo $v->rating <= 4 ? '':'checked'; ?>"></span>
                                                <span class="fa fa-star <?php echo $v->rating <= 5 ? '':'checked'; ?>"></span></td>
                                            <td style="text-align: right;"><span class="badge" style="font-size: 8px;background-color: #89BF43;"><?php echo $v->jenis_satuan ?></span></td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 11px;
                                            font-weight: 800; text-align: left;"><?php echo $v->nama_produk ?></td>
                                            <td style="text-align: right;"><p style="font-weight: bold;
                                                font-size: 8px;">Rp.<?php echo number_format($v->harga) ?>,-</p></td>
                                        </tr>

                                    </table>
                                    <a class="link-to" href="<?php echo base_url() ?>Home/detail_product"><span><i class="fa fa-shopping-cart fa-fw"></i></span></span> Pesan Sekarang</a>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="pills-category-bibit" role="tabpanel" aria-labelledby="pills-categorybibit-tab">
                    <h4 style="font-weight: bold;">Bibit Unggulan</h4>
                    <div class="row-fluid">
                        <div class="category-product-slider">
                            <div class="category-product-wrapper">
                                <div class="image-product-category">
                                    <img src="<?php echo base_url() ?>img/bibit-example.jpg"/>
                                </div>
                                <div class="product-category-overview">
                                    <table style="width: 100%;">
                                        <tr>
                                            <td style="font-size: 9px;
                                            text-align: left;
                                            padding-top: 8px;">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span></td>
                                            <td style="text-align: right;"><span class="badge" style="font-size: 8px;background-color: #89BF43;">Kg</span></td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 11px;
                                            font-weight: 800; text-align: left;">Organik</td>
                                            <td style="text-align: right;"><p style="font-weight: bold;
                                                font-size: 8px;">Rp.69.000,-</p></td>
                                        </tr>

                                    </table>
                                    <a class="link-to"><span><i class="fa fa-shopping-cart fa-fw"></i></span></span> Pesan Sekarang</a>
                                </div>
                            </div>
                            <div class="category-product-wrapper">
                                <div class="image-product-category">
                                    <img src="<?php echo base_url() ?>img/bibit-example.jpg"/>
                                </div>
                                <div class="product-category-overview">
                                    <table style="width: 100%;">
                                        <tr>
                                            <td style="font-size: 9px;
                                            text-align: left;
                                            padding-top: 8px;">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span></td>
                                            <td style="text-align: right;"><span class="badge" style="font-size: 8px;background-color: #89BF43;">Kg</span></td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 11px;
                                            font-weight: 800;text-align: left;">SP-36</td>
                                            <td style="text-align: right;"><p style="font-weight: bold;
                                                font-size: 8px;">Rp.69.000,-</p></td>
                                        </tr>

                                    </table>
                                    <a class="link-to"><span><i class="fa fa-shopping-cart fa-fw"></i></span></span> Pesan Sekarang</a>
                                </div>
                            </div>
                            <div class="category-product-wrapper">
                                <div class="image-product-category">
                                    <img src="<?php echo base_url() ?>img/bibit-example.jpg"/>
                                </div>
                                <div class="product-category-overview">
                                    <table style="width: 100%;">
                                        <tr>
                                            <td style="font-size: 9px;
                                            text-align: left;
                                            padding-top: 8px;">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span></td>
                                            <td style="text-align: right;"><span class="badge" style="font-size: 8px;background-color: #89BF43;">Kg</span></td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 11px;
                                            font-weight: 800;text-align: left;">SP-36</td>
                                            <td style="text-align: right;"><p style="font-weight: bold;
                                                font-size: 8px;">Rp.69.000,-</p></td>
                                        </tr>

                                    </table>
                                    <a class="link-to"><span><i class="fa fa-shopping-cart fa-fw"></i></span></span> Pesan Sekarang</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-category-UMKM" role="tabpanel" aria-labelledby="pills-categoryumkm-tab">
                    <div style="height: 9.5em;
                    text-align: center;">
                        <p style="margin-top: 23%;
                        transform: translateY(-50%);">Tidak ada</p>

                    </div>
                </div>
            </div>
            
        </div>

        <div class="container" style="margin-top: 30px;">
            <h4 style="font-weight: bold;">Unggulan UMKM</h4>
            <div class="row-fluid">
                <div class="category-product-slider">
                    <div class="category-product-wrapper">
                        <div class="image-product-category">
                            <img src="<?php echo base_url() ?>img/pupuk-organik-5.jpg"/>
                        </div>
                        <div class="product-category-overview">
                            <table style="width: 100%;">
                                <tr>
                                    <td style="font-size: 9px;
                                    text-align: left;
                                    padding-top: 8px;">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span></td>
                                    <td style="text-align: right;"><span class="badge" style="font-size: 8px;background-color: #89BF43;">Kg</span></td>
                                </tr>
                                <tr>
                                    <td style="font-size: 11px;
                                    font-weight: 800; text-align: left;">Organik</td>
                                    <td style="text-align: right;"><p style="font-weight: bold;
                                        font-size: 8px;">Rp.69.000,-</p></td>
                                </tr>

                            </table>
                            <a class="link-to"><span><i class="fa fa-shopping-cart fa-fw"></i></span></span> Pesan Sekarang</a>
                        </div>
                    </div>
                    <div class="category-product-wrapper">
                        <div class="image-product-category">
                            <img src="<?php echo base_url() ?>img/pupuk-organik-5.jpg"/>
                        </div>
                        <div class="product-category-overview">
                            <table style="width: 100%;">
                                <tr>
                                    <td style="font-size: 9px;
                                    text-align: left;
                                    padding-top: 8px;">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span></td>
                                    <td style="text-align: right;"><span class="badge" style="font-size: 8px;background-color: #89BF43;">Kg</span></td>
                                </tr>
                                <tr>
                                    <td style="font-size: 11px;
                                    font-weight: 800;text-align: left;">SP-36</td>
                                    <td style="text-align: right;"><p style="font-weight: bold;
                                        font-size: 8px;">Rp.69.000,-</p></td>
                                </tr>

                            </table>
                            <a class="link-to"><span><i class="fa fa-shopping-cart fa-fw"></i></span></span> Pesan Sekarang</a>
                        </div>
                    </div>
                    <div class="category-product-wrapper">
                        <div class="image-product-category">
                            <img src="<?php echo base_url() ?>img/pupuk-organik-5.jpg"/>
                        </div>
                        <div class="product-category-overview">
                            <table style="width: 100%;">
                                <tr>
                                    <td style="font-size: 9px;
                                    text-align: left;
                                    padding-top: 8px;">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span></td>
                                    <td style="text-align: right;"><span class="badge" style="font-size: 8px;background-color: #89BF43;">Kg</span></td>
                                </tr>
                                <tr>
                                    <td style="font-size: 11px;
                                    font-weight: 800;text-align: left;">NPK Phonska</td>
                                    <td style="text-align: right;"><p style="font-weight: bold;
                                        font-size: 8px;">Rp.69.000,-</p></td>
                                </tr>

                            </table>
                            <a class="link-to"><span><i class="fa fa-shopping-cart fa-fw"></i></span></span> Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container" style="margin-top: 30px;">
            <h4 style="font-weight: bold;">Kebutuhan Petani</h4>
            <div style="margin-top: 20px; padding: 0px 1vh;">
                <a href="#" class="link-button"><div><img src="<?php echo base_url() ?>img/logo-koperasi.png"/></div> Koperasi Simpan Pinjam</a>
                <a href="#" class="link-button"><div><img src="<?php echo base_url() ?>img/pangan.png"/></div> Info Harga Pangan</a>
            </div>
            
        </div>