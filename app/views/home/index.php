<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="icon" href="<?= BASEURL;?>/img/icon.png" type="image/x-icon" />
    <title>Form Evaluasi</title>
</head>
<body>
    <!-- container 1 -->
    <div class="con1 container d-flex flex-column justify-content-center align-items-center vh-100 vw-100" style="transition: 0.5s;">
        <div class="col-6">
            <h1 class="text-primary mb-3">Haloo</h1>
            <small class="name-err text-danger"></small>
            <div class="input-group mt-1">
                <input type="text" class="form-control" placeholder="Masukan nama lengkap anda..." aria-describedby="next" id="name-in" autocomplete="off">
                <button class="btn btn-primary" type="button" id="next">Selanjutnya</button>
            </div>
        </div>
    </div>
    <!-- container 2 -->
    <div class="con2 d-none container d-flex flex-column justify-content-center align-items-center vh-100 vw-100 position-relative" style="transition: 5s; opacity: 0">
        <!-- top -->
        <div class="d-flex justify-content-between col-10">
            <div class="discover-btn p-5">
                <button class="btn-ga btn btn-danger px-4 d-none" data-num="1">Ga!</button>
            </div>
            <div class="p-5" style="opacity: 0;">
                <button class="btn btn-danger px-4" >Ga!</button>  
            </div>
            <div class="discover-btn p-5">
                <button class="btn-ga btn btn-danger px-4 d-none" data-num="2">Ga!</button>  
            </div>
        </div>
        <!-- main -->
        <div class="head">
            <h1 class="text-primary">Mau ga jadi pacar aku?</h1>
        </div>
        <div class="main d-flex flex-row justify-content-center col-2">
            <div class="p-5">
                <button class="btn-ya btn btn-primary px-4"data-bs-toggle="modal" data-bs-target="#res-modal" >Mau</button>
            </div>
            <div class="p-5">
                <button class="btn-ga-first btn btn-danger px-4" >Ga!</button>  
            </div>
        </div>
        <!-- bottom -->
        <div class="d-flex justify-content-between col-10">
            <div class="discover-btn p-5">
                <button class="btn-ga btn btn-danger px-4 d-none" data-num="3">Ga!</button>
            </div>
            <div class="p-5" style="opacity: 0;">
                <button class="btn btn-danger px-4" >Ga!</button>  
            </div>
            <div class="discover-btn p-5">
                <button class="btn-ga btn btn-danger px-4 d-none" data-num="4">Ga!</button>  
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="res-modal" tabindex="-1" aria-labelledby="resModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="resModalLabel">Respon Terkirim!</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Terimakasih! respon anda telah berhasil terkirim.
        </div>
        <div class="modal-footer">
            <button type="button" class="btn-confirm btn btn-primary" data-bs-dismiss="modal">Tutup</button>
        </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="<?= BASEURL;?>/js/app.js"></script>
</body>
</html>