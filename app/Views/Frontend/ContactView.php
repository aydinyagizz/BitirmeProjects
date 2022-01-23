<?= $this->extend('Frontend/Layouts/Main'); ?>

<?= $this->section('content'); ?>

<div class="main-wrapper ">
    <section class="page-title bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <h1 class="text-capitalize mb-4 text-lg">Bizimle İletişime geçin</h1>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact form start -->
    <section class="contact-form-wrap section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
<!--                    <form id="contact-form" class="contact__form" method="post" action="--><?//= base_url($data['locale'].'/contact'); ?><!--">-->
                    <form class="contact__form" method="post" action="<?= base_url(route_to('messages1')) ?>">
                        <!-- form message -->
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                    Your message was sent successfully.
                                </div>
                            </div>
                        </div>
                        <!-- end message -->
                        <span class="text-color">Bir mesaj gönder</span>
                        <h3 class="text-md mb-4">İletişim Formu</h3>
                        <div class="form-group">
                            <input name="name" type="text" class="form-control" placeholder="Adınız Soyadınız *">
                        </div>
                        <div class="form-group">
                            <input name="email" type="email" class="form-control" placeholder="Email Adresiniz *">
                        </div>
                        <div class="form-group-2 mb-4">
                            <textarea name="message" class="form-control" rows="4" placeholder="Mesajınız *"></textarea>
                        </div>
                        <input class="btn btn-main" name="submit" type="submit" value="Gönder" / >
<!--                        <button class="btn btn-main" name="submit" type="submit">Gönder</button>-->
                    </form>
                </div>

                <div class="col-lg-5 col-sm-12">
                    <div class="contact-content pl-lg-5 mt-5 mt-lg-0">
                        <span class="text-muted">Ürün ve hizmetlerimizi geliştirebilmemiz için görüş ve önerileriniz bizim için son derece önemlidir.  Hizmet ve ürünler ile ilgili görüş/öneri ve şikayetlerinizi aşağıdaki başvuru formunu doldurarak iletebilirsiniz.</span>


                        <ul class="address-block list-unstyled mt-5">
                            <li>
<!--                                Kriptarium Ar-Ge Yazılım Danışmanlık Savunma-->
<!--                                Sanayi ve Ticaret Ltd. Şti.-->
<!--                                Çaydaçıra Mah. Hacı Ömer Bilginoğlu Cad. No:63/Z07 Fırat Teknokent Ek Binası ELAZIĞ-->
                                <i class="ti-direction mr-3"></i>Adres : <?= $data['record']->site_adres ?>
                            </li>
                            <li>
                                <i class="ti-email mr-3"></i>Email : <?= $data['record']->site_mail ?>
                            </li>
                            <li>
                                <i class="ti-mobile mr-3"></i>Telefon : <?= $data['record']->site_tel ?>
                            </li>
                        </ul>


                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="google-map" >
        
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3114.5881467377317!2d39.17160591517568!3d38.681332279604504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4076c0392d27f05b%3A0x4518a6344d591f49!2sF%C4%B1rat%20Teknokent!5e0!3m2!1str!2str!4v1642539117800!5m2!1str!2str" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>


    <?= $this->endSection(); ?>
