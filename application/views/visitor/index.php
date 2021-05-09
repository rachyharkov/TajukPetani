
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-9">
                        <h4 style="font-size: 3vh;
                        margin: 0; font-weight: bold;"><?php
                        $t = date("H");

                        if ($t < "11") {
                          echo "Selamat Pagi";
                        } elseif ($t < "15") {
                          echo "Selamat Siang";
                        } elseif ($t < "18") {
                          echo "Selamat Sore";
                        } else {
                          echo "Selamat Malam";
                        }
                        ?></h4>
                        <p style="font-size: 2vh;">Selamat Datang di Tajuk Petani Portal</p>
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
            <h4 style="font-weight: bold;">Informasi Cuaca</h4>
        </div>
        <div class="container">
            <div class="row-fluid">
                <div class="weather-card-slider">
                    <?php
                        // simple xml
                        $arrayCuaca = array(
                            0 => "Cerah",
                            1 => "Cerah Berawan",
                            2 => "Cerah Berawan",
                            3 => "Berawan",
                            4 => "Berawan Tebal", 
                            5 => "Udara Kabur",
                            10 => "Asap",
                            45 => "Kabut", 
                            60 => "Hujan Ringan",
                            61 => "Hujan Sedang",
                            63 => "Hujan Lebat",
                            80 => "Hujan Lokal",
                            95 => "Hujan Petir",
                            97 => "Hujan Petir"
                        );
                        $xml = simplexml_load_file("https://data.bmkg.go.id/DataMKG/MEWS/DigitalForecast/DigitalForecast-Lampung.xml");
                        $dataCuaca = $xml->forecast->area[0]->parameter[6]->timerange;
                        $dataKecepatanAngin = $xml->forecast->area[0]->parameter[9]->timerange;
                        $dataKelembaban = $xml->forecast->area[0]->parameter[0]->timerange;
                        foreach($dataCuaca as $cuaca){ 
                            ?>
                    
                    <div class="weather-card cerah">
                        <div style="display: grid; grid-template-columns: 0.5fr 1fr;">
                            <div style="grid-row-start: 1;
                            grid-row-end: 3;">
                                <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="17" cy="17" r="11" fill="#FFB629"/>
                                    <line x1="17.5" y1="2.18557e-08" x2="17.5" y2="5" stroke="black"/>
                                    <line x1="17.5" y1="29" x2="17.5" y2="34" stroke="black"/>
                                    <line x1="5" y1="17.5" x2="-4.37114e-08" y2="17.5" stroke="black"/>
                                    <line x1="34" y1="17.5" x2="29" y2="17.5" stroke="black"/>
                                    <line x1="7.59061" y1="24.8597" x2="4.05508" y2="28.3952" stroke="black"/>
                                    <line x1="28.0967" y1="4.35355" x2="24.5612" y2="7.88909" stroke="black"/>
                                    <line x1="8.18197" y1="8.88908" x2="4.64643" y2="5.35354" stroke="black"/>
                                    <line x1="28.6881" y1="29.3952" x2="25.1525" y2="25.8596" stroke="black"/>
                                </svg>    
                            </div>
                            <div style="text-align: center; font-weight: 600;">
                                <p style="margin-bottom: 0.2rem;white-space: break-spaces;"><?php 
                                $id = intVal($cuaca->value);
                                $cuacanya = "out of borders";

                                if(array_key_exists($id, $arrayCuaca)) {
                                    $cuacanya = $arrayCuaca[$id];
                                }
                                echo $cuacanya;                      
                                ?></p>
                                
                            </div>
                            <div style="text-align: center; font-weight: 600;
                            margin-bottom: 18px;">
                                <p style="margin: 0;">28 / 22°C</p>
                                <p style="margin: 0;
                                font-size: 9px;
                                color: #D6CFCF;
                                margin-left: -18px;
                                margin-top: -3px;">MAX &nbsp;&nbsp; MIN</p>
                            </div>
                        </div>
                        <table style="width: 100%; font-size: 8px;position: absolute;
    bottom: 6px;">
                            <tr>
                                <td>Kecepatan Angin</td>
                                <td>10 km/h</td>
                            </tr>
                            <tr>
                                <td>Kelembaban</td>
                                <td>65%</td>
                            </tr>
                        </table>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="container">
            <h4 style="font-weight: bold;">Unggulan</h4>
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
        <div class="container" style="margin-top: 14px; padding: 0;">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-category-pupuk" role="tabpanel" aria-labelledby="pills-categorypupuk-tab">
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