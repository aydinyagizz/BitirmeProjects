<!DOCTYPE html>
<html lang="tr">
<head>
    <meta name="googlebot" content="noindex">
    <meta name="robots" content="noindex">
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Yönetim Paneli - Kriptarium</title>
    <!--    burayı ben ekledim görüntü bolulursa silinecek-->
    <link rel="stylesheet" href="<?= base_url('assets/Frontend/plugins/bootstrap/css/bootstrap.min.css'); ?>">


    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet"/>
    <link href="<?php echo base_url('assets/Backend/css/styles.css') ?>" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
            crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/Backend/ckeditor/ckeditor.js') ?>"></script>
    <link rel="stylesheet" href="<?= base_url('assets/Frontend/plugins/themify/css/themify-icons.css'); ?>">


</head>


<?php echo $this->renderSection('content') ?>


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

<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="heart_img img-fluid">Copyright &copy; 2021 Kriptarium | Coded with love by YGZ <img
                        src="https://upload.wikimedia.org/wikipedia/commons/4/42/Love_Heart_SVG.svg" alt="heaert"></div>

        </div>
    </div>
</footer>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
<script src="<?php echo base_url('assets/Backend/js/scripts.js') ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="<?php echo base_url('assets/Backend/assets/demo/chart-area-demo.js') ?>"></script>
<script src="<?php echo base_url('assets/Backend/assets/demo/chart-bar-demo.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="<?php echo base_url('assets/Backend/js/datatables-simple-demo.js') ?>"></script>
</body>
</html>
