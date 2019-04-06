<?php include_once ('includes/main_header.php') ?>
<main>
    <div class="container">
        <section class="mt-5 wow fadeIn">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <img src="/assets/img/server.gif" style="pointer-events: none;" width="400" height="300" class=""
                        alt="">
                </div>
                <div class="col-md-6 mb-4">
                    <h3 class="h3 mb-3">NEET Center <small><a href="changelog.php" style="color: red;" class="transition">  0.3.2  </a></small></h3>
                    <p>Перерождение базы данных оперативников
                        <strong>NEET Center</strong> в новом обличии.
                    </p>
                    <a href="https://vk.com/neetcr?w=wall-151224510_631" class="btn btn-outline-black btn-sm" target="_blank">Узнайте больше.</a>
                    <hr>
                    <p> На данный момент у нас: <br>
                        <strong>8</strong> оперативников,
                        <strong>9</strong> рекрутов,
                        <strong>5</strong> руководителей.
                    </p>
                    <?php
                        if(!isset($_SESSION['username'])):
                        ?>
                    <a class="btn btn-grey btn-md"data-toggle="modal" data-target="#modalLoginForm" >Авторизация
                    <i class="fas fa-sign-in-alt ml-1"></i>
                    </a>
                    <a data-toggle="modal" data-target="#modalRegisterForm" class="btn btn-grey btn-md">Регистрация
                    <i class="fas fa-user-plus ml-1"></i>
                    </a>
                    <?php else: ?>
                    <p class="btn btn-outline-red btn-sm"> Здравствуйте, <?php if(isset($_SESSION['username'])) echo $_SESSION['username']; ?>. Вы авторизованы в системе.
                        <?php endif; ?>
                </div>
            </div>
        </section>
        <hr class="my-5">
        <section class="mt-5 wow fadeIn">
            <h3 class="h3 text-center mb-5">Руководство</h3>
            <div class="slider">
                <div class="item item-1"><span>Юрий Котов</span></div>
                <div class="item item-2"><span>Юра Сыщенко</span></div>
                <div class="item item-3">
                    <div><span>Оксана</span><br><span>Малиновская</span></div>
                </div>
                <div class="item item-4"><span>Sify Firewings</span></div>
                <div class="item item-5"><span>Саша Лобачев</span></div>
            </div>
        </section>
    </div>
</main>
<?php include_once ('includes/footer.php') ?>