<?= $this->extend('Frontend/Layouts/Main'); ?>

<?= $this->section('content'); ?>

<div class="main-wrapper ">
    <!-- Slider Start -->
    <section class="slider">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-10">
                    <div class="block">
                        <span class="d-block mb-3 text-white text-capitalize">Kriptarium</span>
                        <h1 style="font-size: 30px;" class="animated fadeInUp mb-5">Bilim bir tiyatro olabilir fakat
                            mühendislik onun sahnesidir.
                            ​Dijital platformlardaki sahnemize Kriptarium'a hoş geldiniz</h1>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section intro">
        <div class="container">
            <div class="row ">
                <div class="col-lg-8">
                    <div class="section-title">
                        <span class="h6 text-color ">Neden Kriptarium</span>
                        <h2 class="mt-3 content-title">"Kriptarium" ne demek? </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="intro-item mb-5 mb-lg-0">
                        <p>Kriptarium kelimesi "kripto" ve "arium" kelimelerinden türetilmiş yapay bir kelimedir.
                            "kripto" kelimesinin sözlük anlamı gizli, görünmez, gözükmeyen anlamına gelirken latince
                            kökenli bir son ek olan "arium" ise belirli bir amaç için kullanılan yer anlamına
                            gelmektedir.
                            Biz kriptarium kelimesini "gizliliğin ve güvenliğin sağlandığı yer" anlamında kullanıyoruz..
                            Hoş geldin hayatımıza kriptarium</p>
                    </div>
                </div>


            </div>
        </div>
    </section>


    <!-- Section Cta Start -->
    <section class="section cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="cta-item  bg-white p-5 rounded">
                        <span class="h6 text-color">Sizin için yaratıyoruz</span>
                        <h2 class="mt-2 mb-4">Projenizi En İyi Profesyonel Ekibimize Emanet Edin</h2>
                        <p class="lead mb-4">Aklında herhangi bir proje var mı? Anında destek için :</p>
                        <h3><i class="ti-email mr-3 text-color"></i>iletisim@kriptarium.com</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Section Cta End-->

    <!-- Section Testimonial Start -->
    <section class="section testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 ">
                    <div class="section-title">
                        <span class="h6 text-color">Motivasyon Köşesi</span>
                        <h2 class="mt-3 content-title">Düşünürlerimizin Söylediklerine Bakalım</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row testimonial-wrap">

                <?php foreach ($data['record'] as $key => $yazilar) : ?>

                    <div class="testimonial-item position-relative">
                        <i class="ti-quote-left text-color"></i>

                        <div class="testimonial-item-content">
                            <p class="testimonial-text"><?= $yazilar->motivasyon_content ?></p>

                            <div class="testimonial-author">
                                <h5 class="mb-0 text-capitalize"><?= $yazilar->motivasyon_author ?></h5>
                                <p><?= $yazilar->motivasyon_author ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>


            </div>
        </div>
    </section>
    <!-- Section Testimonial End -->
    <section class="section latest-blog bg-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title">

                        <h2 class="mt-3 content-title text-white">Duyurular</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                <?php foreach ($data['duyurular'] as $key => $duyuru) : ?>
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="card bg-transparent border-0">
                            <img
                                 src="<?= base_url('assets/Backend/images/duyurular') . '/' . $duyuru->yazi_foto; ?>"
                                 alt=""
                                 class="img-fluid rounded">

                            <div class="card-body mt-2">

                                <h3 class="mt-3 mb-5 lh-36"><a href="#"
                                                               class="text-white "><?= $duyuru->yazi_title ?></a></h3>

                                <a href="blog-single.html"
                                   class="btn btn-small btn-solid-border btn-round-full text-white">DAHA
                                    FAZLA BİLGİ EDİN</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>


            </div>
        </div>
    </section>


    <?= $this->endSection(); ?>
