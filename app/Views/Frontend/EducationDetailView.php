<?= $this->extend('Frontend/Layouts/Main'); ?>

<?= $this->section('content'); ?>

<div class="main-wrapper ">
    <section class="page-title bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">

                        <h1 class="text-capitalize mb-4 text-lg">Eğitimler Detay</h1>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section blog-wrap bg-gray">
        <div class="container">

                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-lg-10 mb-5">
                            <div class="single-blog-item">
                                <img width="100%" src="<?= base_url('assets/Backend/images/egitimler') . '/' . $data['record']->egitim_foto; ?>"
                                     alt=""
                                     class="img-fluid rounded">

                                <div class="blog-item-content bg-white p-5">


                                    <h2 class="mt-3 mb-4"><?= $data['record']->egitim_title; ?>
                                    </h2>
                                    <p class="lead mb-4"><?= $data['record']->egitim_icerik; ?></p>


                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>

                    </div>


            </div>
        </div>
    </section>

    <?= $this->endSection(); ?>
