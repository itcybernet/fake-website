<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fashion - Home</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/">
    <!-- icon -->
    <link rel="stylesheet" href="assets/font_awesome/css/all.min.css">
    <!-- custom -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/mobile.css">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
</head>


<body>

    <!-- navbar -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

            <!-- burger -->
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- menu -->
            <div class="col-lg-4">
                <ul class="navbar-nav mr-auto menu-nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="#">PRIA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">WANITA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ANAK-ANAK</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-4  logo-mob">
                <a href="#" class="logo"><span class=" d-block ml-2">FASHION</span></a>
            </div>

            <div class="col-lg-4 search-mob">
                <form class="form-inline">
                    <div class="nav-icon">
                        <a href="#">
                            <i class="fa fa-user user"></i>
                        </a>
                        <a href="#">
                            <I class="fa fa-shopping-bag bag"></I>
                        </a>
                    </div>

                    <input class="form-control " type="search" placeholder="Cari Barangmu Disini..."
                        aria-label="Search"><i class="fa fa-search search"></i>
            </div>
            </form>


            <!-- menu -->
            <div class="menu-mob" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="#">PRIA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">WANITA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ANAK-ANAK</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- slider  -->
    <div class="container-fluid p-0 ">
        <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselIndicators" data-slide-to="1"></li>
                <li data-target="#carouselIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/image/slider1.jpg.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/image/slider2.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/image/slider3.png" alt="Third slide">
                </div>
            </div>
        </div>
    </div>

    <!-- brand -->
    <div class="container p-0 m-0-mob">
        <div class="row">
            <div class="col-sm-12">
                <div class="title">
                    <h2>brand kami</h2>
                </div>
            </div>
            <?php

            $img         = array('adidas.png' , 'levis logo.png' , 'nike logo.png' , 'guess logo.png' , 'vans icon.png' , 'kids logo.png' , 'vans icon.png' , 'adidas.png' , 'nike logo.png' , 'levis logo.png' , 'guess logo.png' , 'kids logo.png' );

            for ($i=0; $i < count($img) ; $i++) { ?>

            <div class="col-lg-2 col-md-3 col-sm-4 hidden">

                <img src="assets/image/brand/<?= $img[$i]; ?>" alt="" class="brand">
            </div>

            <?php
            }
            ?>
        </div>
    </div>


    <!-- produk -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="title">
                    <h2>produk</h2>
                </div>
            </div>
            <?php
            $link = array(
                array(
                    //gambar
                    'pria.jpg' , 'wanita.jpg' , 'anak.jpg' , 'hijab.jpg' , 'baby.jpg' , 'sepatu.jpg'
                ),
                array(
                    //link
                    'pria.php' , 'wanita.php' , 'anak.php' , 'hijab.php' , 'baby.php' , 'sepatu.php'
                ),
                array(
                    //text
                    'pria' , 'wanita' , 'anak' , 'hijab' , 'balita' , 'sepatu'
                )
        );

        for ($i=0; $i < count($link[0]) ; $i++) { ?>

            <div class="col-lg-4 col-md-6 mt-5">
                <!-- link menuju produk -->
                <a href="<?= $link[1][$i]; ?>" class="link-produk">
                    <!-- gambar produk -->
                    <img src="assets/image/<?= $link[0][$i]; ?> " alt="<?= $link[2][$i]; ?>" class="img-produk">
                    <!-- text produk -->
                    <span class="text-produk"><?= $link[2][$i]; ?></span>
                    <span class="animate-left"></span>
                    <span class="animate-right"></span>
                </a>
            </div>

            <?php
        }

?>
        </div>
    </div>

    <!-- info -->
    <div class="container text-justify info">
        <div class="row  mg-top ">
            <div class="col-lg-12 text-center">
                <h4 class="text-uppercase">Lorem ipsum dolor sit amet.</h4>
            </div>
            <div class="col-lg-12">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo rerum aperiam ex eligendi
                    commodi itaque amet molestiae quae, iusto cupiditate incidunt magnam blanditiis sapiente.
                    Aperiam earum recusandae, impedit unde dolorem, quo pariatur quas, molestias doloremque

                    <b> nobis corporis error accusamus iste ipsum.</b> Commodi nobis minima tempore nesciunt
                    magni
                    quaerat molestias, atque vel quasi odio cumque fugiat odit eaque dolore ratione eius
                    doloribus ut at, ipsa placeat adipisci laboriosam. Non quam numquam eius, exercitationem
                    eaque consequatur expedita harum ipsum deserunt libero aperiam, accusantium provident
                    blanditiis quasi tempora! Iste minus, nostrum qui ut nemo, quidem, id possimus aliquam
                    voluptatem dolorum deleniti iusto doloribus.</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse nam veritatis, <cite> nobis
                        dolorem delectus!</cite> Eaque consequatur voluptatum autem qui maxime dignissimos
                    eveniet. Modi, provident praesentium? Ea aspernatur neque quibusdam. Nihil beatae dolores
                    provident vel, fuga animi vero culpa modi quam maxime laboriosam corrupti deleniti earum
                    eligendi. Eum, tempora deserunt?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem obcaecati quidem
                    explicabo corporis? Aspernatur quas voluptatem magnam tempore quam maiores.</p>
            </div>
        </div>
    </div>
    </div>
    </div>


    <!-- pembayaran & jasa kirim -->

    <!-- jasa kirim -->
    <div class="container pembayaran">
        <div class="row">
            <div class="col-md-5">
                <h2 class="title">jasa kirim</h2>
                <div class="flex-row justify-content-center">
                    <div class="col col-auto">
                        <img src="https://i.pinimg.com/originals/0e/ea/75/0eea758ee51314e36b33eb91bd0335bf.png"
                            alt="JNE" class="icon">
                        <img src="https://image.winudf.com/v2/image1/Y29tLmp0ZXhwcmVzcy5NeUNsaWVudF9pY29uXzE1NjU3NzA2MzRfMDgy/icon.png?w=170&fakeurl=1"
                            alt="J&T" class="icon">
                        <img src="https://www.ninjavan.co/assets/favicons/ninja-favicon.ico" alt="Ninja Express"
                            class="icon">
                        <img src="https://apprecs.org/gp/images/app-icons/300/61/pos.kantorpos.jpg" alt="Pos Indonesia"
                            class="icon">
                        <img src="https://pbs.twimg.com/profile_images/766240139513253888/4fXLj8KO_400x400.jpg"
                            alt="SiCepat" class="icon">
                        <img src="https://assets.aftership.com/couriers/svg/tiki.svg" alt="tiki" class="icon">
                        <img src="http://www.grosirpalingmurah.com/image-upload/INDAH_LOGISTIK_LOGO.png"
                            alt="indah logistik" class="icon">
                        <img src="https://miro.medium.com/max/3508/1*POIunC9euahenSUX26jXSg.png" alt="gojek"
                            class="icon">
                    </div>
                </div>
            </div>

            <!-- pembayaran -->
            <div class="col-md-5 offset-2">
                <h2 class="title">pembayaran</h2>
                <div class="flex-row justify-content-center">
                    <div class="col col-auto">
                        <!-- icon bca -->
                        <img src="https://cdn.iconscout.com/icon/free/png-512/bca-225544.png" alt="BCA" class="icon">
                        <!-- icon bri -->
                        <img src="https://pngimage.net/wp-content/uploads/2018/06/icon-bri-png-2.png" alt="BRI"
                            class="icon">
                        <!-- icon mandiri -->
                        <img src="https://pbs.twimg.com/profile_images/446860620680294400/BssQIpTw.jpeg" alt="mandiri"
                            class="icon">
                        <!-- icon visa -->
                        <img src="http://icons.iconarchive.com/icons/iconsmind/outline/512/Visa-icon.png" alt="visa"
                            class="icon">
                        <!-- icon bni -->
                        <img src="https://medioenblog.files.wordpress.com/2018/01/bni1200x630bb.jpg" alt="BNI"
                            class="icon">
                        <!-- icon bni -->
                        <img src="https://waralabakan.com/media/k2/items/cache/3bd6583af5a14653b7b54db2c9fe7f3e_XL.jpg"
                            alt="alfamart" class="icon">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <div class="container-fluid bg-dark text-white footer">
        <div class="row">
            <div class="col-md-4 alamat">
                <h4 class="title">alamat</h4>
                <div class="flex-row">
                    <div class="col-md-10 offset-2 d-block">
                        <i class="fa fa-home"></i> 944 Gerard Glens Larkin Prairie North Torrey 06876 <br>
                        <i class="fa fa-phone"></i> 1-076-233-1174 <br>
                        <i class="fa fa-mail-bulk"></i> mail@mail.com
                    </div>
                </div>
            </div>

            <div class="col-md-4 layanan text-center">
                <h4 class="title">layanan</h4>
                <div class="row">
                    <div class="col-md-12">
                        <a href="#">bantuan</a>
                    </div>
                    <div class="col-md-12">
                        <a href="#">cara pesan</a>
                    </div>
                    <div class="col-md-12">
                        <a href="#">cara transfer</a>
                    </div>
                    <div class="col-md-12">
                        <a href="#">cara pengembalian</a>
                    </div>
                    <div class="col-md-12">
                        <a href="#">hubungi kami</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 tentang text-center">
                <h4 class="title">tentang kami</h4>
                <div class="row">
                    <div class="col-md-12">
                        <a href="#">about us</a>
                    </div>
                    <div class="col-md-12">
                        <a href="#">persyaratan & ketentuan</a>
                    </div>
                    <div class="col-md-12">
                        <a href="#">kebijakan privasi</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h4 class="title">temukan kami</h4>
                <div class="row">
                    <div class="col col-auto social-icon ">
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube-square"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 offset-2">
                <h4 class="title text-center">aplikasi kami</h4>
                <div class="row">
                    <div class="col col-auto store">
                        <a href="#">
                            <img src="assets/image/googleplay badges.jpg" alt="playstore">
                        </a>
                        <!-- appstore -->
                        <a href="#">
                            <img src="assets/image/appstore badges.jpg" alt="appstore">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>