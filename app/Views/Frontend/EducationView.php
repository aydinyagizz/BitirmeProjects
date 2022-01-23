<?= $this->extend('Frontend/Layouts/Main'); ?>

<?= $this->section('content'); ?>

<div class="main-wrapper ">
    <section class="page-title bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <h1 class="text-capitalize mb-4 text-lg">Eğitimler</h1>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section blog-wrap bg-gray">
        <div class="container">
            <div class="row">

                <?php

                function kisalt($kelime, $str = 125)
                {
                    if (strlen($kelime) > $str) {
                        if (function_exists("mb_substr")) $kelime = mb_substr($kelime, 0, $str, "UTF-8") . '..';
                        else $kelime = substr($kelime, 0, $str) . '..';
                    }
                    return $kelime;
                }

                ?>

                <?php foreach ($data['record'] as $key) : ?>

                    <div class="col-lg-6 col-md-6 mb-5">
                        <div class="blog-item" >
                            <img style="height: 245px!important;" src="<?= base_url('assets/Backend/images/egitimler') . '/' . $key['egitim_foto']; ?>" alt=""
                                 class="img-fluid rounded">

                            <div class="blog-item-content bg-white p-5">


                                <h3 class="mt-3 mb-3"><a href="education-detail/<?= $key['egitim_id']; ?>"><?= substr(strip_tags($key['egitim_title']), 0, 30); ?></a>
                                </h3>
                                <p class="mb-4"><?= kisalt($key['egitim_icerik']); ?></p>

                                <a href="education-detail/<?= $key['egitim_id']; ?>" class="btn btn-small btn-main btn-round-full">DAHA FAZLA
                                    BİLGİ
                                    EDİN</a>
                            </div>
                        </div>
                    </div>

                    <?php endforeach; ?>

            </div>

            <div class="row justify-content-center mt-5">
                <div class="col-lg-12 text-center">
                    <nav class="navigation pagination d-inline-block">

                        <?= $data['pager']->links('default', 'custom_pagination'); ?>

                    </nav>
                </div>
            </div>
        </div>
    </section>

    <?= $this->endSection(); ?>
