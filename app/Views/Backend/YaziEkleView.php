<?php echo $this->extend('Backend/Layouts/Main'); ?>
<?php echo $this->section('content'); ?>
    <body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="anasayfa"><img
                    src="<?php echo base_url('assets/frontend/images/firat_uni_logo_footer.png') ?>" class="img-fluid"
                    width="150" height="150"></a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                    class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">

            </div>
        </form>

        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                   aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Ayarlar</a></li>

                    <li><a class="dropdown-item" href="<?= base_url('/panel/logout') ?>">Çıkış</a></li>
                </ul>
            </li>
        </ul>
    </nav>
<div id="layoutSidenav">

<?= $this->include('Backend/Layouts/partials/menu'); ?>

    <main id="layoutSidenav_content">
    <main>
        <div class="card">

            <div class="card-body">

                <div class="container-fluid px-4">
                    <div class="card-header">
                        <i class="fa fa-plus fa-fw"></i> Motivasyon Yazı Ekle
                    </div>
                    <br>
                    <div class="row">
                        <?= $this->include('Backend/Layouts/partials/errors'); ?>
                        <?php //TODO: Route To daki url Routes.php deki as ile verilen fake controller adı ?>
                        <form role="form" action="<?= base_url(route_to('admin_yazi_ekle')) ?>" method="post"
                              enctype="multipart/form-data">


                            <div class="form-group">
                                <label style="font-weight: bold;">Yazı İçerik</label>
                                <textarea name="motivasyon_content" id="motivasyon_content" class="ckeditor" cols="30"
                                          rows="10" ></textarea>
                            </div>

                            <div class="form-group">
                                <label style="font-weight: bold;">Yazı Yazarı</label>
                                <input class="form-control" name="motivasyon_author" placeholder="Yazarı Giriniz" >
                            </div>

                            <div class="form-group">
                                <label style="font-weight: bold;">Yazı Mesleği</label>
                                <input class="form-control" name="motivasyon_job" placeholder="Yazarın Mesleğini Giriniz">
                            </div>

                            <button type="submit" name="motivasyon_ekle" id="motivasyon_ekle" class="btn btn-primary btn-block">
                                Ekle
                            </button>
                        </form>

                        <script language="javascript" type="text/javascript">
                            CKEDITOR.replace('yazi_icerik', {
                                filebrowserBrowseUrl: '../browser/browse.php',
                                filebrowserImageBrowseUrl: '../browser/browse.php?type=Images',
                                filebrowserUploadUrl: '../uploader/upload.php',
                                filebrowserImageUploadUrl: '../uploader/upload.php?type=Images',
                                filebrowserWindowWidth: '900',
                                filebrowserWindowHeight: '400',
                                filebrowserBrowseUrl: '../ckfinder/ckfinder.html',
                                filebrowserImageBrowseUrl: '../ckfinder/ckfinder.html?Type=Images',
                                filebrowserFlashBrowseUrl: '../ckfinder/ckfinder.html?Type=Flash',
                                filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                                filebrowserImageUploadUrl: '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                filebrowserFlashUploadUrl: '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                            });
                        </script>


                    </div>
    </main>

<?php echo $this->endSection(); ?>