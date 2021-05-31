<div class="good">
    <i class="fas fa-check-circle" style="color: #82c91e;margin: auto;"></i>    
</div>
        <div style="display: flex;
    width: 100%;
    position: fixed;
    top: 0;
    flex-direction: column;
    background-color: #ffffff;
    z-index: 9">
            <div style="width: 100%;
                padding: 2px 6px;
                box-shadow: rgb(99 99 99 / 20%) 0px 2px 8px 0px;
                display: grid;
                grid-template-columns: 0.2fr 1fr;">
                <a class="link-back" href="<?php echo base_url() ?>Koperasi/koperasi_products" style="font-size: 31px;
                color: #00000066;
                padding: 2px 15px;
                line-height: 8vh;"><i class="fas fa-angle-left"></i></a>
                <p id="texttitlewindow" style="margin: 3px 0;
                font-size: 21px;
                font-weight: 600;
                line-height: 8vh;">Tambah Produk</p>
            </div>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="text" name="tbimagelist" id="tbimagelist"/>
            <div style="width: 100%; margin-top: 14vh; padding: 0 2vh;">
                <div style="display: flex; flex-direction: column; margin-bottom: 15px;">
                    <label>Foto</label>
                    <div id="image-collection-wrapper" style="display: flex;
                        flex-wrap: wrap;
                        justify-content: flex-start;">
                        <div class="image-collection">
                            <input style="display: block;
                                width: 100%;
                                height: 100%;
                                opacity: 0;" accept="image/" type="file" multiple="multiple" name="tbimageProduct[]" id="tbimageProduct" />
                            <i class="far fa-plus-square" style="position: absolute;
                                top: 50%;
                                left: 50%;
                                transform: translate(-50%,-50%);
                                width: 24px;
                                height: 24px;
                                z-index: -1;"></i>
                        </div>
                    </div>
                </div>
                <div class="group">
                    <input autocomplete="off" class="tbinputcustom" type="text" id="tbnamaproduk" name="tbnamaproduk" required="required"/>
                    <label class="labelinputcustom" for="tbnamaproduk">Nama Produk</label>
                    <div class="bar"></div>
                </div>
                <div class="group">
                    <input autocomplete="off" class="tbinputcustom tbinputharga" type="text" id="tbhargaproduk" name="tbhargaproduk" required="required" style="padding-left: 26px;" />
                    <label class="labelinputcustom labelhargainput" for="tbhargaproduk" style="left: 26px;">Harga</label>
                    <p style="position: absolute;top: 19px;">Rp</p>
                    <div class="bar"></div>
                </div>
                
                <h2 style="margin-top: 1em;font-size: 21px;">Kategori</h2>
                <div class="group">
                    <div class="options">
                        <?php 
                        foreach ($kategori as $e) {
                            ?>
                                <input name="pilihanKategori" type="radio" id="<?php echo $e->nama_kategori.'option' ?>" class="hide" value="<?php echo $e->id_kategori?>">
                                <label for="<?php echo $e->nama_kategori.'option' ?>"><?php echo $e->nama_kategori?></label>

                            <?php
                        }

                        ?>
                    </div>
                </div>
                <div style="width: 100%;
    display: grid;
    grid-template-columns: 1fr 0.6fr 5px 0.6fr;">
                    <div class="group">
                        <input autocomplete="off" class="tbinputcustom" type="text" id="tbValueberat" name="tbValueberat" required="required"/>
                        <label class="labelinputcustom" for="tbValueberat">Nilai berat</label>
                        <div class="bar"></div>
                    </div>
                    <select id="selectSatuanBerat" name="pilihanSatuanBerat" data-selected="" disabled>
                        <option value="" selected="selected" disabled="disabled">></option>
                    </select>
                    <span style="    height: 100%;
                    line-height: 2;
                    font-size: 22px;
                    text-align: center;">/</span>
                    <select id="selectSatuanBarang" name="pilihanSatuanBarang">
                        <option value="" selected="selected" disabled="disabled">Barang?</option>
                        <option value="1">Botol</option>
                        <option value="2">Karung</option>
                    </select>
                </div>
                <div class="group">
                    <input autocomplete="off" class="tbinputcustom" type="text" id="tbstok" name="tbstok" required="required"/>
                    <label class="labelinputcustom" for="tbstok">Stok</label>
                    <div class="bar"></div>
                </div>
                <div class="group">
                    <input autocomplete="off" class="tbinputcustom" type="text" id="tbminpemesanan" name="tbminpemesanan" required="required"/>
                    <label class="labelinputcustom" for="tbminpemesanan">Min. Pemesanan</label>
                    <div class="bar"></div>
                </div>
                
                <h2 style="margin-top: 1em;font-size: 21px;">Kondisi</h2>
                <div class="group">
                    <div class="options">
                        <?php 
                        $kondisilist = 'baru-bekas-nganu';
                        $kategoris = explode('-', $kondisilist);
                        foreach ($kategoris as $e) {
                            ?>
                                <input name="pilihanKondisi" type="radio" id="<?php echo $e.'option' ?>" class="hide" value="<?php echo $e?>">
                                <label for="<?php echo $e.'option' ?>"><?php echo $e?></label>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="group">
                    <input autocomplete="off" class="tbinputcustom" type="text" id="tbvarian" name="tbvarian" required="required"/>
                    <label class="labelinputcustom" for="tbvarian">Varian</label>
                    <div class="bar"></div>
                </div>
                <h2 style="margin-top: 1em;font-size: 21px;">Jenis Bantuan</h2>
                <div class="group">
                    <div class="options">
                        <?php 
                        $jb = 'Subsidi-Non Subsidi';
                        $jblei = explode('-', $jb);
                        foreach ($jblei as $e) {
                            ?>
                                <input name="pilihanJb" type="radio" id="<?php echo $e.'option' ?>" class="hide" value="<?php echo $e?>">
                                <label for="<?php echo $e.'option' ?>"><?php echo $e?></label>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="group">
                    <button id="btnSpawnDescriptionWindow" type="button">Tambah Deskripsi <div id="indicatordescription"><i class="fas fa-exclamation-circle" style="color: orange;margin: auto;"></i></div><div style="text-align: right;"><i class="fas fa-chevron-right"></i></div></button>
                </div>
                <div id="description-window">
                    <textarea class="textarea" id="textareadescription"></textarea>
                    <button id="btnCloseDescriptionWindow" type="button">Tutup</button>
                </div>
                <button type="submit" id="btnsubmitProduk" class="btn btn-success" style="width: 100%;
                background: #89BF43;
                font-weight: 700;
                border: none;
                margin-bottom: 12px;">Tayangkan</button>
                <a href="<?php echo base_url() ?>Koperasi/koperasi_products" class="btn btn-light link-back" style="width: 100%;
                font-weight: 700;
                border: none;
                margin-bottom: 12px;
                background: #ececec;">Kembali</a>
            </div>
        </form>
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

    var arraynamafile = [];
    var arraynamafiletipe = [];

    $('#selectSatuanBarang').change(function() {
        var dataSatuanbarangbotol = ['L','Ml'];
        var dataSatuanbarangkarung = ['Kg','Ton'];
        $('#selectSatuanBerat').removeAttr('disabled').empty();
        if ($(this).val() == '1') {
            for(var i=0; i<= dataSatuanbarangbotol.length; i++){
                $('#selectSatuanBerat').append($("<option>").text(dataSatuanbarangbotol[i]).val(dataSatuanbarangbotol[i]));
            }
        } else {
            for(var i=0; i<= dataSatuanbarangkarung.length; i++){
                $('#selectSatuanBerat').append($("<option>").text(dataSatuanbarangkarung[i]).val(dataSatuanbarangkarung[i]));
            }
        }
    })

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

    $("#btnSpawnDescriptionWindow").click(function() {
        $("#texttitlewindow").text('Deskripsi Produk');
        $("#description-window").css('display','block');
        $('#textareadescription').focus();
        var top= window.scrollY;
    
        document.body.style.overflow= 'hidden';

        window.onscroll= function() {
            window.scroll(0, top);
        }
    })

    $("#btnCloseDescriptionWindow").click(function() {
        document.body.style.overflow= '';
        window.onscroll= null;
        if (!$('#textareadescription').val()) {
            $("div#indicatordescription").empty().append('<i class="fas fa-exclamation-circle" style="color: orange;margin: auto;"></i>');
        } else {
            $("div#indicatordescription").empty().append('<i class="fas fa-check-circle" style="color: #82c91e;margin: auto;"></i>');
        }
        $("#texttitlewindow").text('Tambah Produk');
        $("#description-window").css('display','none');
    });

    $('#tbimageProduct').change(function(){
        const [file] = this.files;
        var names = []; //get file name
        var elements = document.querySelectorAll('.image-collection');
        var parentElement = document.getElementById('image-collection-wrapper');
        if (file) {
            //bug, masih bisa ngupload file elbih dari 5
            if (elements.length > 5) {
                alert('Maximal foto hanya 5');
                return;
            }

            for (var i = 0; i < $(this).get(0).files.length; ++i) {
                names.push($(this).get(0).files[i].name); // get file name
                arraynamafile.push($(this).get(0).files[i].name); // get file name
                arraynamafiletipe.push($(this).get(0).files[i].name.split('.').pop()); // get file name
                //names.push($(this).get(0).files[i]);
                parentElement.insertAdjacentHTML('beforeend', `<div class="image-collection" id="imgcollection${i}">
                    <img id="img${i}" name="img${i}" style="height: 100%; width: 100%; object-fit: cover;transform: scale(1.5);">
                    <button onclick="document.getElementById('imgcollection${i}').remove()" style="position: absolute;
                        top: 0;
                        right: 0;
                        font-size: 11px;
                        background-color: #d64141;
                        border: none;
                        color: white;
                        border-radius: 50%;">x</button>
                </div>`);
                document.getElementById(`img${i}`).src = URL.createObjectURL(this.files[i]);
            }
            $("#tbimagelist").val(names.join(';'));
            console.log(names); //get file name
        }
    });

    $('#btnsubmitProduk').click(function(){
        $("#btnsubmitProduk").css({
            'opacity':'0.6',
            'pointer-events':'none'
        }).html('<i class="fas fa-circle-notch fa-spin"></i>');
        
        var tbnamaproduk = $("#tbnamaproduk").val();
        var tbstok = $("#tbstok").val();
        var tbminpemesanan = $("#tbminpemesanan").val();
        var tbkondisi = $("input[name=pilihanKondisi]:checked").val();
        var tbkategori = $("input[name=pilihanKategori]:checked").val();
        var tbvarian = $("#tbvarian").val();
        var tbberatnumber = $("#tbValueberat").val();
        var tbjenissatuan = $("#selectSatuanBerat").val();
        var tbjenisbantuan = $("input[name=pilihanJb]:checked").val();
        var tbdeskripsi = $("#textareadescription").val();
        var tbharga = $("#tbhargaproduk").val();
        //var gambars = $("#tbimagelist").val();
        //pass object in post

        if (!tbdeskripsi) {
            $("div#indicatordescription").empty().append('<i class="fas fa-exclamation-circle" style="color: orange;margin: auto;"></i>');
            $("#btnsubmitProduk").css({
                'opacity':'1',
                'pointer-events':'initial'
            }).html('Tayangkan');
            return;   
        }

        var form_data = new FormData();
        var ins = document.getElementById('tbimageProduct').files.length;
        for (var x = 0; x < ins; x++) {
            form_data.append("files[]", document.getElementById('tbimageProduct').files[x]); //files[] adalah value dari property name (penting digunakan saat ngupload file)
        }
        console.log(form_data);
        $.ajax({
            url: "<?php echo base_url() ?>/koperasi/uploadGambarProduk", 
            dataType: 'text',
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (response) {
                var obje = JSON.parse(response);
                console.log(obje);
                console.log('succes lah pokoknya mah');
                $('.good').css('display','flex');
                 $("#btnsubmitProduk").html('<i class="fas fa-check-circle"></i>');
                 window.location.href = "<?php echo base_url() ?>Koperasi/koperasi_products";
            },
            error: function (response) {
                //$('#msg').html(response); // display error response from the server
                console.log('error');
                console.log(response);
            }
        });//ajax here
        // AJAX Code To Submit Form.
        var dataString = {'tbnamaproduk': tbnamaproduk , 'tbstok': tbstok , 'tbminpemesanan': tbminpemesanan , 'tbkondisi': tbkondisi,'tbkategori': tbkategori,'tbvarian': tbvarian, 'tbberatnumber': tbberatnumber,'tbjenissatuan': tbjenissatuan,'tbjenisbantuan': tbjenisbantuan,'tbdeskripsi':tbdeskripsi,'tbharga':tbharga,'jumlahfile': arraynamafile.length,'filestype': arraynamafiletipe};
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>koperasi/insert_product_operation",
            data: dataString,
            dataType: 'json',
            cache: false,
            success: function(result){
                alert(result.msg);

            }
        });
        return false;
    })
    </script>
  </body>
</html>