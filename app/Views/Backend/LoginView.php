<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Yönetim Paneli - Fırat Üniversitesi</title>
    <link href="<?= base_url('assets/Backend/css/styles.css') ?>" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
            crossorigin="anonymous"></script>
</head>
<body class="bg-primary">

<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">

                        <div class="card shadow-lg border-0 rounded-lg mt-5">


                            <?= $this->include('Backend/Layouts/partials/errors'); ?>


                            <div class="card-header"><h3 class="text-center font-weight-light my-4"><img
                                            src="<?= base_url('assets/Frontend/images/kriptariumlogo.png'); ?>"
                                            class="img-fluid"></h3></div>
                            <div class="card-body">


                                <form role="form" action="<?= base_url(route_to('admin_login')) ?>" method="post">

                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputEmail" name="admin_kadi" type="text"
                                               placeholder="name@example.com"/>
                                        <label for="inputEmail">Kullanıcı Adı</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputPassword" name="admin_sifre"
                                               type="password" placeholder="Password"/>
                                        <label for="inputPassword">Şifre</label>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">

                                        <button type="submit" class="btn btn-primary" name="giris">Giriş Yap</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <style>


        .heart_img img {
            animation: 1.3s cubic-bezier(0.39, 0.58, 0.57, 1) 0s normal none infinite running animateHeartBeat;
            max-width: 15px;
        }

        @keyframes animateHeartBeat {
            0% {
                transform: scale(1);
            }
            5% {
                transform: scale(1.4);
            }
            10% {
                transform: scale(1.3);
            }
            15% {
                transform: scale(1.8);
            }
            50% {
                transform: scale(1);
            }
            100% {
                transform: scale(1);
            }
        }

        @keyframes animateHeartBeat {
            0% {
                transform: scale(1);
            }
            5% {
                transform: scale(1.4);
            }
            10% {
                transform: scale(1.3);
            }
            15% {
                transform: scale(1.8);
            }
            50% {
                transform: scale(1);
            }
            100% {
                transform: scale(1);
            }
        }
    </style>


    <div id="layoutAuthentication_footer">
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="heart_img img-fluid">Copyright &copy; 2021 Kriptarium | Coded with love by YGZ <img
                                src="https://upload.wikimedia.org/wikipedia/commons/4/42/Love_Heart_SVG.svg"
                                alt="heaert"></div>
                    <div>

                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
<script src="<?= base_url('assets/Backend/js/scripts.js') ?>"></script>

</body>
</html>
