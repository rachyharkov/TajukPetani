
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
                                <p style="margin: 0;">28 / 22??C</p>
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
                        foreach($cocoktanams as $ct) { 
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
                                            <?php echo $ct->musim_tanaman ?>
                                        </div>
                                        <p style="font-style: normal;
                                            font-weight: bold;
                                            font-size: 20px;
                                            line-height: 27px;
                                            margin: 0;"><?php echo bulan($ct->bulan); ?></p>
                                    </div>
                                </div>
                                <img src="<?php echo base_url().'img/'.$ct->gambar ?>" style="position: absolute;
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

        <div class="container"x>
            <h4 style="font-weight: bold;">Harga Pangan</h4>
            <p style="margin: 0; font-size: 10px;">Terakhir update : 1 Juni 2021 <span class="badge bg-warning text-dark">Memasuki Musim Hujan</span></p>
        </div>
        
        <div style="width: 100%; margin-top: 2vh;">
            <div class="selectdiv" style="margin: 0 24px;">
              <label style="width: 100%;">
                  <select id="comboboxpiliharea">
                      <option selected>Pilih Area</option>
                      <option value="Bekasi">Bekasi</option>
                      <option value="Lampung">Lampung</option>
                      <option value="Banten">Banten</option>
                      <option value="Yogyakarta">Yogyakarta</option>
                      <option value="Bandung">Bandung</option>
                      <option value="Jakarta">Jakarta</option>
                  </select>
              </label>
            </div>
            <div style="width: 100%;">
                <div style="overflow-x: scroll;overflow-y: hidden;">
                    <div style="padding: 16px 1em;
                        width: 100%;
                        display: grid;
                        grid-template-rows: 1fr 1fr;
                        grid-auto-flow: column;
                        grid-gap: 26px 14px;">

                        <?php 

                        foreach($hargapangans as $hp) {

                            $rentang = '';
                            $icon = '';
                            $background = '';
                            $hsekarang = $hp->harga_sekarang;
                            $hlalu = $hp->harga_lalu;
                            $output = '';

                            if ($hsekarang > $hlalu) {
                                $icon = 'fas fa-arrow-up fa-fw';
                                $background = '#c0392b';
                                $rentang = $hsekarang - $hlalu;
                                $diff = ($hsekarang - $hlalu) / $hlalu;
                                $output = round($diff * 100, 2).'% - Rp.'.$rentang;
                            }
                            if ($hsekarang < $hlalu) {
                                $icon = 'fas fa-arrow-down fa-fw';
                                $background = '#27ae60';
                                $rentang = $hlalu - $hsekarang;
                                $diff = ($hsekarang - $hlalu) / $hlalu;
                                $output = round($diff * 100, 2).'% - Rp.'.$rentang;
                            } 

                            if ($hsekarang === $hlalu) {
                                $icon = 'fa fa-pause fa-fw';
                                $background = '#2980b9';
                                $rentang = 0;
                                $output = 'Harga Tetap';
                            }

                            ?>

                        <div style="width: 144px;
                            padding: 27px 1px 12px 1px;
                            position: relative;
                            box-shadow: rgb(99 99 99 / 27%) 0px 2px 8px 0px;
                            border-radius: 10px;
                            display: flex;
                            flex-direction: column;
                            justify-content: center;">
                            <div style="    background: <?php echo $background; ?>;
                                font-size: 10px;
                                color: #f8f9fa;
                                text-align: center;
                                line-height: 15px;
                                padding: 9px;
                                position: absolute;
                                box-shadow: rgb(99 99 99 / 20%) 0px 2px 8px 0px;
                                top: -11px;
                                border-radius: 14px;
                                left: 8px;">
                                <p style="margin: 0;
                                position: relative;
                                padding-left: 20px;"><span style="
                                position: absolute;
                                left: -6px;
                                top: -4px;
                                font-size: 20px;
                                "><i class="<?php echo $icon ?>"></i></span><?php echo $output ?></p> 
                            </div>
                            <p style="margin: 0 1em;
                                font-size: 17px;
                                font-weight: 700;">Rp.<?php echo $hsekarang.'/'.$hp->satuan; ?></p>
                            <p style="font-size: 13px;
                                margin: 0 1.2em;"><?php echo $hp->nama_pangan; ?></p>
                        </div>

                        <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
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