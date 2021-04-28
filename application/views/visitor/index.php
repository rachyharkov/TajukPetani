<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!--custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">

    <title>Hello, world!</title>
    <script src="https://kit.fontawesome.com/fd0c5ab4fe.js" crossorigin="anonymous"></script>
    <style>
        
    </style>
  </head>
  <body>
    <div id="warning-body">
        <p style="margin: auto;">Silahkan buka web ini pada perangkat ponsel</p>
    </div>
    <div id="body">
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-9">
                        <h4 style="font-size: 3vh;
                        margin: 0; font-weight: bold;">Hello, Roedy!</h4>
                        <p style="font-size: 2vh;">Selamat Datang di Tajuk Petani Portal</p>
                    </div>
                    <div class="col-3" style="text-align: right;">
                        <div class="wrapper-pp">
                            <a href="#">
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
            <h4 style="font-weight: bold;">Kategori</h4>
            <div class="row-fluid">
                <div class="category-button-slide">
                    <button class="btn btn-light"><span style="margin: 0 3px;"><img src="<?php echo base_url() ?>img/pupuk.png" style="height: 21px; margin-bottom: 5px;"/></span>Pupuk</button>
                    <button class="btn btn-light"><span style="margin: 0 3px;"><img src="<?php echo base_url() ?>img/bibit.png" style="height: 21px; margin-bottom: 5px;"/></span>Bibit</button>
                    <button class="btn btn-light"><span style="margin: 0 3px;"><img src="<?php echo base_url() ?>img/house.png" style="height: 21px; margin-bottom: 5px;"/></span>UMKM</button>
                    <button class="btn btn-light"><span style="margin: 0 3px;"><img src="<?php echo base_url() ?>img/pupuk.png" style="height: 21px; margin-bottom: 5px;"/></span>Pupuk</button>
                    <button class="btn btn-light"><span style="margin: 0 3px;"><img src="<?php echo base_url() ?>img/bibit.png" style="height: 21px; margin-bottom: 5px;"/></span>Bibit</button>
                    <button class="btn btn-light"><span style="margin: 0 3px;"><img src="<?php echo base_url() ?>img/house.png" style="height: 21px; margin-bottom: 5px;"/></span>UMKM</button>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top: 14px;">
            <h4 style="font-weight: bold;">Pupuk Unggulan</h4>
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
                            <button><span><i class="fa fa-shopping-cart fa-fw"></i></span></span> Pesan Sekarang</button>
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
                            <button><span><i class="fa fa-shopping-cart fa-fw"></i></span></span> Pesan Sekarang</button>
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
                            <button><span><i class="fa fa-shopping-cart fa-fw"></i></span></span> Pesan Sekarang</button>
                        </div>
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
                            <button><span><i class="fa fa-shopping-cart fa-fw"></i></span></span> Pesan Sekarang</button>
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
                            <button><span><i class="fa fa-shopping-cart fa-fw"></i></span></span> Pesan Sekarang</button>
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
                            <button><span><i class="fa fa-shopping-cart fa-fw"></i></span></span> Pesan Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container" style="margin-top: 30px;">
            <h4 style="font-weight: bold;">Kebutuhan Petani</h4>
            <div style="margin-top: 20px;">
                <a href="#" class="link-button"><div><img src="<?php echo base_url() ?>img/logo-koperasi.png"/></div> Koperasi Simpan Pinjam</a>
                <a href="#" class="link-button"><div><img src="<?php echo base_url() ?>img/pangan.png"/></div> Info Harga Pangan</a>
            </div>
            
        </div>

        <div class="container" style="padding: 13px 0;text-align: center;">
            <p>By Kelompok 1 - Teknologi Informasi</p>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>