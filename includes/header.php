<?php include_once'social/includes/session.php'; ?>
<?php include_once'social/includes/database.php'; ?>
<?php include_once'social/includes/functions.php'; ?>
<?php include_once'social/partials/parseLogin.php'; ?>
<?php include_once'social/partials/parseSignup.php'; ?>
<!-- transition -->
<style>
 body { display: none; }
</style>
<!-- /transition -->
<!DOCTYPE html>
<html lang="ru">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>NEET Crimea</title>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
      <link href="assets/css/bootstrap.min.css" rel="stylesheet">
      <link href="assets/css/mdb.min.css" rel="stylesheet">
      <link href="assets/css/style.min.css" rel="stylesheet">
      <link href="assets/css/topsl.css" rel="stylesheet">
      <link href="assets/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">
      <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
      <script src="assets/js/jquery.mb.YTPlayer.js"></script>
      <script src="assets/js/transition.js"></script>
      <script src="assets/js/bgndVideo.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   </head>
    <body>
<!-- header -->
        <header>
<!-- navbar -->
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
                <div class="container">
                    <a class="navbar-brand transition" href="index.php">
                    <strong>NEET Crimea</strong>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link transition">Главная
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link transition" href="about.php">О нас</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav nav-flex-icons">
                            <?php // if not authorised
                                if(!isset($_SESSION['username'])):
                                ?>
                            <li class="nav-item">
                                <a class="nav-link border border-light rounded"
                                    data-toggle="modal" data-target="#modalLoginForm">
                                <i class="fas fa-sign-in-alt"></i>Вход
                                </a>
                            </li>
                            <?php // if authorised
                             else: ?>
                            <li class="nav-item">
                                <a href="social/profile.php" class="nav-link border border-light rounded transition">
                                <i class="fas fa-user"></i>Профиль
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="social/logout.php" style="right: -10px;" class="nav-link border border-light rounded transition">
                                <i class="fas fa-sign-out-alt"></i>Выход
                                </a>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </nav>
<!-- /navbar -->
<!-- topsl -->
            <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="view">
<!-- videobackground -->
<!-- OLQs_wqFR18 Violet Evergarden --> <div id="bgndVideo" class="player" data-property="{videoURL:'http://youtu.be/OLQs_wqFR18', quality:'hd720', containment:'self',autoPlay:true,showControls:false, mute:true, startAt:0,stopAt:128, opacity:1,}"></div>
<!-- /videobackground -->
                       <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
                        <div class="text-center white-text mx-5 wow fadeIn">
                           <h1 class="mb-3">
                              <br>
                              <strong>Региональный штаб Крымского филиала Домашней Гвардии</strong>
                           </h1>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
<!-- /topsl -->
   </header>
<!-- /header -->
