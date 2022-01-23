<?= $this->extend('Frontend/Layouts/Main'); ?>

<?= $this->section('content'); ?>


<div class="main-wrapper ">
    <section class="page-title bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">

                        <h1 class="text-capitalize mb-4 text-lg">Hakkımızda</h1>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Section About Start -->
    <section class="section about-2 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="about-item pr-3 mb-5 mb-lg-0">
                        <span class="h6 text-color">Biz neyiz ?</span>
                        <h2 class="mt-3 mb-4 position-relative content-title">Yaratıcı insanlardan oluşan dinamik bir
                            ekibiz</h2>
                        <p class="mb-5">Dijital çağda bilgi güvenliğini sağlayabilmek için tüm imkanları size
                            sunuyoruz.</p>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about-item-img">
                        <img src="<?= base_url('assets/Frontend/images/background4.jpg'); ?>" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section About End -->

    <section class="about-info section pt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="about-info-item mb-4 mb-lg-0">
                        <h3 class="mb-3"><span class="text-color mr-2 text-md ">01.</span>Misyonumuz</h3>
                        <p><?= $data['record']->hakkimizda_misyon; ?> </p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="about-info-item mb-4 mb-lg-0">
                        <h3 class="mb-3"><span class="text-color mr-2 text-md">02.</span>Amacımız</h3>
                        <p><?= $data['record']->hakkimizda_amac; ?> </p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="about-info-item mb-4 mb-lg-0">
                        <h3 class="mb-3"><span class="text-color mr-2 text-md">03.</span>Tarihçe</h3>
                        <p><?= $data['record']->hakkimizda_tarihce; ?> </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?= $this->endSection(); ?>
