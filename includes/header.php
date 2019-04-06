<?php
    $page_title = '';
    include_once'core/config/Session.php';
  	include_once'core/config/Database.php';
  	include_once'core/config/Utilities.php';
    include_once'core/controllers/ParseRegister.php';
    include_once'core/controllers/ParseLogin.php';
    ?>
<!DOCTYPE html>
<style> body { display: none; }
      </style>
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
      <link href="assets/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">
      <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
      <script src="assets/js/jquery.mb.YTPlayer.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

      <script type="text/javascript">
          $(document).ready(function() {
            	$("body").css("display", "none");
          });
      </script>
      <script type="text/javascript">
      $(document).ready(function() {
          $("body").css("display", "none");

          $("body").fadeIn(500);

      	$("a.transition").click(function(event){
      		event.preventDefault();
      		linkLocation = this.href;
      		$("body").fadeOut(500, redirectPage);
      	});

      	function redirectPage() {
      		window.location = linkLocation;
      	}
      });
      </script>

      <script>
         jQuery(function(){
              jQuery("#bgndVideo").YTPlayer();
            });

      </script>
      <style type="text/css">
         html,
         body,
         header,
         .carousel {
         height: 40vh;
         }
         @media (max-width: 740px) {
         html,
         body,
         header,
         .carousel {
         height: 100vh;
         }
         }
         @media (min-width: 800px) and (max-width: 850px) {
         html,
         body,
         header,
         .carousel {
         height: 100vh;
         }
         }
         @media (min-width: 800px) and (max-width: 850px) {
         .navbar:not(.top-nav-collapse) {
         background: black !important;
         }
         }
      </style>
   </head>
   <body>
      <header>
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
                      <?php
                        if(!isset($_SESSION['username'])):
                        ?>
                       <li class="nav-item">
                          <a class="nav-link border border-light rounded"
                             data-toggle="modal" data-target="#modalLoginForm">
                          <i class="fas fa-sign-in-alt"></i>Вход
                          </a>
                       </li>
                       <?php else: ?>
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
         <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

            <div class="carousel-inner" role="listbox">
               <div class="carousel-item active">
                  <div class="view">
                     <div id="bgndVideo" class="player" data-property="{videoURL:'http://youtu.be/OLQs_wqFR18', quality:'hd720', containment:'self',autoPlay:true,showControls:false, mute:true, startAt:0,stopAt:128, opacity:1,}"></div>
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
      </header>
      <main>
