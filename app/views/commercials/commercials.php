<?php
    include_once __DIR__ . '/../layout/header.php';
    include_once __DIR__ . '/commercial_form.php';
    include_once __DIR__ . '/commercial_del.php';
?> 
<div class="container" id="commercials-page">
    <div class="row align-items-center justify-content-center pt-4">
        <div class="col-3"></div>
        <div class="col-3">
            <div class="">
                <div class="align-text-bottom text-center">
                    <h2>Commercials</h2>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="text-left">
                <button type="button" class="btn btn-md btn-primary" data-toggle="modal" data-target="#modalCommercialForm">
                <i class="fa fa-briefcase"></i>
                </button>
            </div>
        </div>
    </div>
    <hr>
    <div class="row justify-content-center py-4">
        <div class="col-10">
            <div id="grid_container">
                <?php include_once __DIR__ . "/commercial_grid.php" ?>
            </div>
        </div>
    </div>
</div>

 <?php include_once __DIR__ . '/../layout/footer.php' ?>
