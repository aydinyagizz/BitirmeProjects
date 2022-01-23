<!doctype html>
<html lang="<?= $data['locale']; ?>">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="megakit,business,company,agency,multipurpose,modern,bootstrap4">

    <link rel="icon" type="image/png" href="<?= base_url('assets/Frontend/images/kriptarium-logo.png'); ?>">

    <meta name="author" content="themefisher.com">

    <title>Kriptarium</title>

    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="<?= base_url('assets/Frontend/plugins/bootstrap/css/bootstrap.min.css'); ?>">
    <!-- Icon Font Css -->
    <link rel="stylesheet" href="<?= base_url('assets/Frontend/plugins/themify/css/themify-icons.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/Frontend/plugins/fontawesome/css/all.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/Frontend/plugins/magnific-popup/dist/magnific-popup.css'); ?>">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/Frontend/plugins/slick-carousel/slick/slick.cs'); ?>s">
    <link rel="stylesheet" href="<?= base_url('assets/Frontend/plugins/slick-carousel/slick/slick-theme.css'); ?>">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="<?= base_url('assets/Frontend/css/style.css'); ?>">

</head>

<body>


<!-- Header Start -->

<header class="navigation">


    <div class="header-top ">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-3 col-md-4">
                    <div class="header-top-socials text-center text-lg-left text-md-left">
                        <li class="list-inline-item"><a href="https://www.facebook.com/themefisher"><i
                                        class="ti-facebook "></i></a></li>
                        <li class="list-inline-item"><a href="https://twitter.com/themefisher"><i
                                        class="ti-twitter "></i></a></li>
                        <li class="list-inline-item"><a href="https://www.pinterest.com/themefisher/"><i
                                        class="ti-instagram  "></i></a></li>
                        <li class="list-inline-item"><a href="https://www.pinterest.com/themefisher/"><i
                                        class="ti-linkedin  "></i></a></li>
                        <li class="list-inline-item"><a href="https://www.pinterest.com/themefisher/"><i
                                        class="ti-email  "></i></a></li>
                        <li class="list-inline-item"><a href="https://www.pinterest.com/themefisher/"><i
                                        class="ti-youtube  "></i></a></li>
                    </div>
                </div>


                <div class="">
                    <ul class="" style="list-style: none">
                        <li class="nav-item dropdown">

                            <a style="color: white!important; font-family: Poppins; font-size: 14px;"
                               class="nav-link dropdown-toggle mt-1" href="<?= base_url('/tr') ?>/" id="dropdown09"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span

                                        class="flag-icon flag-icon-<?php echo ($data['locale'] == "en") ? 'us' : 'tr'; ?>"> </span>
                                <?php if ($data['locale'] == "tr") { ?>
                                    <?= lang('Menu.Turkish'); ?>
                                <?php } else { ?>
                                    <?= lang('Menu.English'); ?>
                                <?php } ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdown09">
                                <a class="dropdown-item <?= ($data['locale'] == "en") ? 'active' : ''; ?>"
                                   href="<?php echo base_url('/en') ?>/"><span class="flag-icon flag-icon-us"></span>
                                    <?= lang('Menu.English'); ?></a>
                                <a class="dropdown-item <?= ($data['locale'] == "tr") ? 'active' : ''; ?>"
                                   href="<?php echo base_url('/tr') ?>/"><span class="flag-icon flag-icon-tr"></span>
                                    <?= lang('Menu.Turkish'); ?></a>
                            </div>
                        </li>

                    </ul>
                </div>


            </div>
        </div>
    </div>


    <nav class="navbar navbar-expand-lg  py-4" id="navbar">
        <div class="container ">
            <a class="navbar-brand" href="<?= base_url('/'); ?>">
                <!-- Kriptarium<span>.com</span>  -->
                <img src="<?= base_url('assets/Frontend/images/kriptariumlogo.png'); ?>">
            </a>

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>

            <div class="collapse navbar-collapse text-center" id="navbarsExample09">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url($data['locale'] . '/') ?>"><?= lang('Menu.Anasayfa') ?>
                            <span
                                    class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item"><a class="nav-link"
                                            href="<?= base_url($data['locale'] . '/products') ?>"><?= lang('Menu.Ürünler') ?></a>
                    </li>
                    <li class="nav-item"><a class="nav-link"
                                            href="<?= base_url($data['locale'] . '/education') ?>"><?= lang('Menu.Eğitimlerimiz') ?></a>
                    </li>
                    <li class="nav-item"><a class="nav-link"
                                            href="<?= base_url($data['locale'] . '/about') ?>"><?= lang('Menu.Hakkında') ?></a>
                    </li>

                    <li class="nav-item"><a class="nav-link"
                                            href="<?= base_url($data['locale'] . '/contact') ?>"><?= lang('Menu.İletişim') ?></a>
                    </li>
                    <li class="nav-item"><a class="nav-link"
                                            href="<?= base_url($data['locale'] . '/announcement') ?>"><?= lang('Menu.Duyurular') ?></a>
                    </li>

                </ul>
                </ul>


            </div>
        </div>
    </nav>
</header>

<!-- Header Close -->


<?php echo $this->renderSection('content') ?>


<!-- footer Start -->
<footer class="footer section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="widget">
                    <h4 class="text-capitalize mb-4">Hızlı Linkler</h4>

                    <ul class="list-unstyled footer-menu lh-35">
                        <li><a href="#">Anasayfa</a></li>
                        <li><a href="#">Haber ve Duyurular</a></li>
                        <li><a href="#">Ürünler</a></li>
                        <li><a href="#">Eğitimlerimiz</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="widget">
                    <h4 class="text-capitalize mb-4">Şirket</h4>

                    <ul class="list-unstyled footer-menu lh-35">
                        <li><a href="about">Hakkında</a></li>
                        <li><a href="fatihozkaynak">Fatih Özkaynak</a></li>
                        <li><a href="#">Şartlar ve Koşullar</a></li>
                        <li><a href="#">SSL</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="widget">
                    <h4 class="text-capitalize mb-4">Destek</h4>

                    <ul class="list-unstyled footer-menu lh-35">
                        <li><a href="contact    ">İletişim</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 ml-auto col-sm-6">
                <div class="widget">
                    <div class="logo mb-4">
                        <h3>kriptarium<span>.com</span></h3>
                    </div>
                    <h6><a href="mailto: iletisim@kriptarium.com" type="email">iletisim@kriptarium.com</a></h6>

                </div>
            </div>
        </div>

        <div class="footer-btm pt-4">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="copyright" style="font-size: 13px;">
                        &copy; COPYRIGHT TÜM HAKLARI SAKLIDIR 2015..<?= date('Y'); ?>
                    </div>


                </div>


                <div class="col-lg-4 col-md-12 col-sm-12 text-left text-lg-left">
                    <ul class="list-inline footer-socials">
                        <li class="list-inline-item"><a href="https://www.facebook.com/themefisher"><i
                                        class="ti-facebook "></i></a></li>
                        <li class="list-inline-item"><a href="https://twitter.com/themefisher"><i
                                        class="ti-twitter "></i></a></li>
                        <li class="list-inline-item"><a href="https://www.pinterest.com/themefisher/"><i
                                        class="ti-instagram  "></i></a></li>
                        <li class="list-inline-item"><a href="https://www.pinterest.com/themefisher/"><i
                                        class="ti-linkedin  "></i></a></li>
                        <li class="list-inline-item"><a href="https://www.pinterest.com/themefisher/"><i
                                        class="ti-email  "></i></a></li>
                        <li class="list-inline-item"><a href="https://www.pinterest.com/themefisher/"><i
                                        class="ti-youtube  "></i></a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>

<!--
Essential Scripts
=====================================-->


<!-- Main jQuery -->
<script src="<?= base_url('assets/Frontend/plugins/jquery/jquery.js'); ?>"></script>
<script src="<?= base_url('assets/Frontend/js/contact.js'); ?>"></script>
<!-- Bootstrap 4.3.1 -->
<script src="<?= base_url('assets/Frontend/plugins/bootstrap/js/popper.js'); ?>"></script>
<script src="<?= base_url('assets/Frontend/plugins/bootstrap/js/bootstrap.min.js'); ?>"></script>
<!--  Magnific Popup-->
<script src="<?= base_url('assets/Frontend/plugins/magnific-popup/dist/jquery.magnific-popup.min.js'); ?>"></script>
<!-- Slick Slider -->
<script src="<?= base_url('assets/Frontend/plugins/slick-carousel/slick/slick.min.js'); ?>"></script>
<!-- Counterup -->
<script src="<?= base_url('assets/Frontend/plugins/counterup/jquery.waypoints.min.js'); ?>"></script>
<script src="<?= base_url('assets/Frontend/plugins/counterup/jquery.counterup.min.js'); ?>"></script>

<!-- Google Map -->
<script src="<?= base_url('assets/Frontend/plugins/google-map/map.js'); ?>"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>

<script src="<?= base_url('assets/Frontend/js/script.js'); ?>"></script>

</body>
</html>
