<?= $this->extend('Frontend/Layouts/Main'); ?>

<?= $this->section('content'); ?>


<div class="main-wrapper ">
    <section class="page-title bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <h1 class="text-capitalize mb-4 text-lg">Hizmetlerimiz</h1>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--  Section Services Start -->
    <section class="section service border-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title">
                        <h2 class="mt-3 content-title ">Çok çeşitli yaratıcı hizmetler sunuyoruz </h2>
                    </div>
                </div>
            </div>

            <?php

            function kisalt($kelime, $str = 250)
            {
                if (strlen($kelime) > $str) {
                    if (function_exists("mb_substr")) $kelime = mb_substr($kelime, 0, $str, "UTF-8") . '..';
                    else $kelime = substr($kelime, 0, $str) . '..';
                }
                return $kelime;
            }

            ?>

            <div class="row justify-content-center">

                <?php foreach ($data['record'] as $key) : ?>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="service-item mb-5">
                            <i class="<?= $key->urun_icon ?>"></i>
                            <a href="products-detail/<?= $key->urun_id ?>"><h4
                                        class="mb-3 a-hover"><?= $key->urun_title ?></h4></a>
                            <p><?= kisalt($key->urun_icerik); ?></p>
                        </div>
                    </div>

                <?php endforeach; ?>


            </div>
        </div>
    </section>
    <!--  Section Services End -->

    <section class="cta-2">
        <div class="container">
            <div class="cta-block p-5 rounded">
                <div class="row justify-content-center align-items-center ">
                    <div class="col-lg-7">
                        <h2 class="mt-2 text-white">Projenizi En İyi Profesyonel Ekibimize Emanet Edin</h2>
                    </div>
                    <div class="col-lg-4">
                        <a href="contact" class="btn btn-main btn-round-full float-right">BİZİMLE İLETİŞİME GEÇİN</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?= $this->endSection(); ?>
