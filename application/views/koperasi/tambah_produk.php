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
                grid-template-columns: 0.2fr 1fr;">
                <a class="link-back" href="<?php echo base_url() ?>Home" style="font-size: 31px;
                color: #00000066;
                padding: 2px 15px;
                line-height: 8vh;"><i class="fas fa-angle-left"></i></a>
                <p style="margin: 3px 0;
                font-size: 21px;
                font-weight: 600;
                line-height: 8vh;">Tambah Produk</p>
            </div>
        </div>
        <div style="width: 100%; margin-top: 20vh; padding: 0 2vh;">
            <div style="display: flex; flex-direction: column; margin-bottom: 15px;">
                <label>Foto</label>
                <div id="image-collection-wrapper" style="display: flex;
                    flex-wrap: wrap;
                    justify-content: flex-start;">
                    <div class="image-collection">
                        <input style="display: block;
                            width: 100%;
                            height: 100%;
                            opacity: 0;" accept="image/" type="file" name="tbimageProduct" id="tbimageProduct" />
                        <i class="far fa-plus-square" style="position: absolute;
                            top: 50%;
                            left: 50%;
                            transform: translate(-50%,-50%);
                            width: 24px;
                            height: 24px;"></i>
                    </div>
                </div>
            </div>
            <div style="display: flex; flex-direction: column;">
                <label>Nama Produk</label>
                <input type="text" name="tbnamaproduk"/>
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

    $('#tbimageProduct').change(function(){
        const [file] = this.files;
        var elements = document.querySelectorAll('.image-collection');
        var parentElement = document.getElementById('image-collection-wrapper');
        if (file) {

            if (elements.length > 5) {
                alert('Maximal foto hanya 5');
                return;
            }
            parentElement.insertAdjacentHTML('beforeend', `<div class="image-collection" id="imgcollection${elements.length + 1}">
                <img id="img${elements.length + 1}" name="img${elements.length + 1}" style="height: 100%; width: 100%; object-fit: cover;">
                <button onclick="document.getElementById('imgcollection${elements.length + 1}').remove()" style="position: absolute;
                    top: 0;
                    right: 0;
                    font-size: 11px;
                    background-color: #d64141;
                    border: none;
                    color: white;
                    border-radius: 50%;">x</button>
            </div>`);
            document.getElementById(`img${elements.length + 1}`).src = URL.createObjectURL(file);         
        }
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