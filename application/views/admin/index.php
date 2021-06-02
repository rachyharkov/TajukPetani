
        <div style="padding: 4vh 2vh 0 2vh;">
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
                        <p style="font-size: 2vh;">Portal <?php echo $i->role?></p>
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

        <div style="width: 100%; padding: 1em;">
            <div class="info-account-overview">
                <div>
                    <p style="font-size: 14px; font-weight: bold; margin-bottom: 4px;">32</p>
                    <p style="margin: 0; font-size: 10px; color: gray;">Barang/Hari ini</p>
                    <p style="margin: 0; font-size: 12px;">Terdistribusi</p>        
                </div>
                <div>
                    <p style="font-size: 14px; font-weight: bold; margin-bottom: 4px;">61</p>
                    <p style="margin: 0; font-size: 10px; color: gray;">User/Hari ini</p>
                    <p style="margin: 0; font-size: 12px;">Registrasi</p>
                </div>
                <div>
                    <p style="font-size: 14px; font-weight: bold; margin-bottom: 4px;"><?php echo '23' ?></p>
                    <p style="margin: 0; font-size: 10px; color: gray;">Tiket</p>
                    <p style="margin: 0; font-size: 12px;">Masuk</p>
                </div>
            </div>
        </div>

        <div class="container">
            <h4 style="font-weight: bold;">Informasi Cuaca</h4>
        </div>
        <div style="width: 100%;">
            <div>
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
                            echo "cerah-berawan";
                        } elseif($id < 5) {
                            echo "berawan";
                        } elseif($id < 60) {
                            echo "kabut";
                        } elseif($id < 64) {
                            echo "hujan-ringan";
                        } else {
                            echo "hujan";
                        }
                    ?>">
                    <div style="display: flex; flex-direction: column; justify-content: space-evenly; height: 100%;">
                        <div style="display: grid; grid-template-columns: 0.5fr 1fr;">
                            <div style="grid-row-start: 1;
                            grid-row-end: 3;">
                            <?php
                            if($id < 1) {
                            ?>
                                <img src="<?php echo base_url() ?>img/logo-cerah.svg">
                            <?php
                            } elseif($id < 3) {

                                ?>
                                <img src="<?php echo base_url() ?>img/logo-cerah-berawan.svg">
                            <?php
                            } elseif($id < 5) {
                                ?>
                                <img src="<?php echo base_url() ?>img/logo-berawan.svg">
                            <?php
                            } elseif($id < 60) {
                                ?>
                                <img src="<?php echo base_url() ?>img/logo-kabut.svg">
                            <?php
                            } elseif($id < 64) {
                                ?>
                                <img src="<?php echo base_url() ?>img/logo-hujan-ringan.svg">
                            <?php
                            } else {
                                ?>
                                <img src="<?php echo base_url() ?>img/logo-hujan-deras.svg">
                            <?php
                            }
                            ?>    
                            </div>
                            <div style="text-align: center; font-weight: 600;">
                                <p style="margin-bottom: 0.2rem;white-space: break-spaces;"><?php 
                                echo $cuacanya;                      
                                ?></p>
                                
                            </div>
                            <div style="text-align: center; font-weight: 600;">
                                <p style="margin: 0;">28 / 22°C</p>
                                <p style="margin: 0;
                                font-size: 9px;
                                color: #707070;
                                margin-left: -18px;
                                margin-top: -3px;">MAX &nbsp;&nbsp; MIN</p>
                            </div>
                        </div>
                        <table style="width: 100%; font-size: 8px;">
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
                </div>
                    <?php 
                    $i++;
                endforeach ?>
                </div>
            </div>
        </div>

        <div class="container">
            <h4 style="font-weight: bold;">Musim Cocok Tanam</h4>
            <p style="margin: 0; font-size: 10px;">Terakhir update : 1 Juni 2021 <span class="badge bg-warning text-dark">Memasuki Musim Hujan</span></p>
        </div>
        <div style="width: 100%;">
            <div style="overflow-x: scroll;overflow-y: hidden;">
                <div class="card-slider">
                    <?php
                        for ($i=0; $i < 5 ; $i++) { 
                            ?>

                            <div class="card">
                                <div style="background: radial-gradient(ellipse at 80% 36%, #f9f9f900 18%, #83b734 70%);
                                    z-index: 1;
                                    height: 100%;
                                    padding: 0.7em;
                                    color: white;">
                                    <div style="display: flex;
                                        flex-direction: column;
                                        justify-content: space-between;
                                        height: 100%;">
                                        <div>
                                            Kangkung
                                        </div>
                                        <p style="font-style: normal;
                                            font-weight: bold;
                                            font-size: 20px;
                                            line-height: 27px;
                                            margin: 0;">Januari</p>
                                    </div>
                                </div>
                                <img src="<?php echo base_url() ?>img/mc-kangkung.png" style="position: absolute;
                                    width: 100%;
                                    top: -24px;
                                    right: -19px;
                                    object-fit: cover;
                                    transform: scale(0.8);">
                            </div>

                            <?php
                        }
                    ?>
                    
                </div>
            </div>
        </div>

        <div class="container">
            <h4 style="font-weight: bold;">Harga Pangan</h4>
            <p style="margin: 0; font-size: 10px;">Terakhir update : 1 Juni 2021 <span class="badge bg-warning text-dark">Memasuki Musim Hujan</span></p>
        </div>
        <div style="width: 100%; margin-top: 2vh;">
            <img src="<?php echo base_url() ?>img/map.svg" style="width: 100%;">
        </div>
        
        <div class="container" style="margin-top: 30px;">
            <h4 style="font-weight: bold;">Information Management</h4>
            <div style="margin-top: 20px; padding: 0px 1vh;">
                <a href="#" class="link-button"><div><img src="<?php echo base_url() ?>img/logo-koperasi.png"/></div> Kelola Koperasi</a>
                <a href="#" class="link-button"><div><img src="<?php echo base_url() ?>img/logo-koperasi.png"/></div> Kelola User</a>
                <a href="#" class="link-button"><div><img src="<?php echo base_url() ?>img/pangan.png"/></div> Kelola Harga Pangan</a>
                <a href="#" class="link-button"><div><img src="<?php echo base_url() ?>img/pangan.png"/></div> Kelola Data Cocok Tanam</a>
            </div>
            
        </div>