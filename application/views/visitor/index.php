
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
                        $area = $xml->forecast->area;
                        
                        //$dataCuaca = $area->parameter[6]->timerange[1]; //jam 6 pagi
                        //$dataKecepatanAngin = $area->parameter[8]->timerange;
                        //$dataKelembaban = $area->parameter[0]->timerange;
                        $i = 0;
                        foreach($area as $a): 
                            if ($i == 5) {break;}

                            $id = intVal($a->parameter[6]->timerange[4]->value);
                            $cuacanya = "out of borders";

                            if(array_key_exists($id, $arrayCuaca)) {
                                $cuacanya = $arrayCuaca[$id];
                            }
                            ?>
                    
                    <div class="weather-card <?php 
                        if($id < 1) {
                            echo "cerah";
                        } elseif($id < 3) {
                            echo "berawan";
                        } else  {
                            echo "hujan";
                        }
                    ?>">
                        <div style="display: grid; grid-template-columns: 0.5fr 1fr;">
                            <div style="grid-row-start: 1;
                            grid-row-end: 3;">
                            <?php 
                            if($id < 1) {
                            ?>
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
                            <?php
                            } elseif($id < 3) {
                                ?>
                                    <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                    <circle cx="7.85417" cy="6.64583" r="6.64583" fill="#FFB629"/>
                                    <path d="M23.3813 12.1196C22.9729 10.0649 21.8644 8.21548 20.2448 6.88676C18.6252 5.55805 16.5949 4.83232 14.5 4.83334C11.0079 4.83334 7.975 6.81501 6.46458 9.70293C4.68759 9.89765 3.04505 10.7416 1.85202 12.0729C0.658994 13.4042 -0.000513455 15.129 2.99935e-07 16.9167C2.99935e-07 18.8395 0.763837 20.6836 2.12348 22.0432C3.48311 23.4028 5.32718 24.1667 7.25 24.1667H22.9583C23.7517 24.1667 24.5374 24.0104 25.2704 23.7068C26.0034 23.4032 26.6694 22.9581 27.2304 22.3971C27.7915 21.8361 28.2365 21.1701 28.5401 20.4371C28.8437 19.704 29 18.9184 29 18.125C29 14.935 26.5229 12.3492 23.3813 12.1196Z" fill="white"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0">
                                    <rect width="29" height="29" fill="white"/>
                                    </clipPath>
                                    </defs>
                                    </svg>

                                <?php
                            } else  {
                                ?>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                    <path d="M19.35 10.03C19.0121 8.32956 18.0947 6.79901 16.7543 5.69938C15.414 4.59975 13.7337 3.99915 12 4C9.11 4 6.6 5.64 5.35 8.03C3.87938 8.19115 2.52004 8.88959 1.53271 9.99134C0.545374 11.0931 -0.000424928 12.5206 2.48222e-07 14C2.48222e-07 15.5913 0.632141 17.1174 1.75736 18.2426C2.88258 19.3679 4.4087 20 6 20H19C19.6566 20 20.3068 19.8707 20.9134 19.6194C21.52 19.3681 22.0712 18.9998 22.5355 18.5355C22.9998 18.0712 23.3681 17.52 23.6194 16.9134C23.8707 16.3068 24 15.6566 24 15C24 12.36 21.95 10.22 19.35 10.03Z" fill="black" fill-opacity="0.29"/>
                                    <circle cx="9.75882" cy="21.5341" r="0.5" transform="rotate(15 9.75882 21.5341)" fill="#C4C4C4"/>
                                    <circle cx="9.24118" cy="23.4659" r="0.5" transform="rotate(15 9.24118 23.4659)" fill="#C4C4C4"/>
                                    <circle cx="10.5" cy="22.5" r="0.5" fill="#C4C4C4"/>
                                    <circle cx="11.7588" cy="21.6124" r="0.5" transform="rotate(15 11.7588 21.6124)" fill="#C4C4C4"/>
                                    <circle cx="11.2412" cy="23.5442" r="0.5" transform="rotate(15 11.2412 23.5442)" fill="#C4C4C4"/>
                                    <circle cx="12.5" cy="22.5" r="0.5" fill="#C4C4C4"/>
                                    <circle cx="13.7588" cy="21.6124" r="0.5" transform="rotate(15 13.7588 21.6124)" fill="#C4C4C4"/>
                                    <circle cx="13.2412" cy="23.5442" r="0.5" transform="rotate(15 13.2412 23.5442)" fill="#C4C4C4"/>
                                    <circle cx="4.13004" cy="21.5341" r="0.5" transform="rotate(15 4.13004 21.5341)" fill="#C4C4C4"/>
                                    <circle cx="3.61234" cy="23.4659" r="0.5" transform="rotate(15 3.61234 23.4659)" fill="#C4C4C4"/>
                                    <circle cx="4.87122" cy="22.5" r="0.5" fill="#C4C4C4"/>
                                    <circle cx="6.13004" cy="21.6124" r="0.5" transform="rotate(15 6.13004 21.6124)" fill="#C4C4C4"/>
                                    <circle cx="5.61246" cy="23.5442" r="0.5" transform="rotate(15 5.61246 23.5442)" fill="#C4C4C4"/>
                                    <circle cx="6.87122" cy="22.5" r="0.5" fill="#C4C4C4"/>
                                    <circle cx="8.13004" cy="21.6124" r="0.5" transform="rotate(15 8.13004 21.6124)" fill="#C4C4C4"/>
                                    <circle cx="7.61246" cy="23.5442" r="0.5" transform="rotate(15 7.61246 23.5442)" fill="#C4C4C4"/>
                                    <circle cx="16.13" cy="21.6124" r="0.5" transform="rotate(15 16.13 21.6124)" fill="#C4C4C4"/>
                                    <circle cx="15.6123" cy="23.5442" r="0.5" transform="rotate(15 15.6123 23.5442)" fill="#C4C4C4"/>
                                    <circle cx="16.8712" cy="22.5783" r="0.5" fill="#C4C4C4"/>
                                    <circle cx="18.13" cy="21.6907" r="0.5" transform="rotate(15 18.13 21.6907)" fill="#C4C4C4"/>
                                    <circle cx="17.6125" cy="23.6225" r="0.5" transform="rotate(15 17.6125 23.6225)" fill="#C4C4C4"/>
                                    <circle cx="18.8712" cy="22.5783" r="0.5" fill="#C4C4C4"/>
                                    <circle cx="20.13" cy="21.6907" r="0.5" transform="rotate(15 20.13 21.6907)" fill="#C4C4C4"/>
                                    <circle cx="19.6125" cy="23.6225" r="0.5" transform="rotate(15 19.6125 23.6225)" fill="#C4C4C4"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0">
                                    <rect width="24" height="24" fill="white"/>
                                    </clipPath>
                                    </defs>
                                    </svg>

                                <?php
                            }
                            ?>    
                            </div>
                            <div style="text-align: center; font-weight: 600;">
                                <p style="margin-bottom: 0.2rem;white-space: break-spaces;"><?php 
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
                                <th colspan="2"><?php echo $a->name[1]; ?></th>
                            </tr>
                            <tr>
                                <td>Angin</td>
                                <td><?php echo round($a->parameter[8]->timerange[1]->value[1], 2); ?>/KPH</td>
                            </tr>
                            <tr>
                                <td>Kelembaban</td>
                                <td><?php echo $a->parameter[0]->timerange[1]->value; ?>%</td>
                            </tr>
                        </table>
                    </div>
                    <?php 
                    $i++;
                endforeach ?>
                </div>
            </div>
        </div>

        <div class="container" style="margin-top: 1em;">
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