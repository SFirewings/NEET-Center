

<footer class="page-footer text-center font-small mt-4 wow fadeIn">
    <div class="pt-4">
        <?php
            if(!isset($_SESSION['username'])):
            ?>
        <a class="btn btn-outline-white" data-toggle="modal" data-target="#modalLoginForm"
            role="button">Авторизация
        <i class="fas fa-sign-in-alt ml-2"></i>
        </a>
        <a id="start" class="btn btn-outline-white" data-toggle="modal" data-target="#modalRegisterForm" role="button">Регистрация
        <i class="fas fa-user-plus ml-2"></i>
        </a>
        <?php else: ?>
        <a id="signout" class="btn btn-outline-white transition" href="social/logout.php" role="button">Выйти
        <i class="fas fa-sign-out-alt ml-2"></i>
        </a>
        <?php endif; ?>
    </div>
    <hr class="my-4">
    <div class="pb-4">
        <a href="https://vk.com/neetcr" target="_blank">
        <i class="fab fa-vk mr-3"></i>
        </a>
        <a href="#" target="_blank">
        <i class="fab fa-twitter mr-3"></i>
        </a>
        <a href="#" target="_blank">
        <i class="fab fa-youtube mr-3"></i>
        </a>
    </div>
    <div class="footer-copyright py-3">
        © 2019 Copyright:
        <a href="https://vk.com/neetcr" target="_blank"> NEET Crimea  ❤️</a>
        <p> Powered by SfireEngine </p>
    </div>
</footer>
<script type="text/javascript" src="assets/js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/mdb.min.js"></script>
<script type="text/javascript">
    new WOW().init();
</script>
<!-- -->
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Авторизация</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form-horizontal" action="" method="POST">
              <?php if ( isset( $welcome ) ) echo $$welcome; ?>  

                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                        <i class="fas fa-user prefix grey-text"></i>
                        <input type="text" id="defaultForm-name" name="username" class="form-control validate">
                        <label data-error="ошибка" data-success="верно" for="defaultForm-name">Логин</label>
                    </div>
                    <div class="md-form mb-4">
                        <i class="fas fa-lock prefix grey-text"></i>
                        <input type="password" name="password" id="defaultForm-pass" class="form-control validate">
                        <label data-error="ошибка" data-success="верно" for="defaultForm-pass">Пароль</label>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <input type="hidden" name="token" value="<?php if ( function_exists( '_token' ) ) echo _token(); ?>">
                    <button name="loginBtn" type="submit" value="login" class="btn btn-default">Отправить</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- -->
<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Регистрация</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php if ( isset( $result ) ) echo $result; ?>
            <?php if( !empty( $form_errors ) ) echo show_errors( $form_errors ); ?>
            <div class="modal-body mx-3">
              <form method="post" action="">
                <div class="md-form mb-5">
                    <i class="fas fa-user prefix grey-text"></i>
                    <input type="text" name="username" id="orangeForm-name" class="form-control validate">
                    <label data-error="ошибка" data-success="верно" for="orangeForm-name">Логин</label>
                </div>
                <div class="md-form mb-5">
                    <i class="fas fa-envelope prefix grey-text"></i>
                    <input type="email" name="email" id="orangeForm-email" class="form-control validate">
                    <label data-error="ошибка" data-success="верно" for="orangeForm-email">Email</label>
                </div>
                <div class="md-form mb-4">
                    <i class="fas fa-lock prefix grey-text"></i>
                    <input type="password" name="password" id="orangeForm-pass" class="form-control validate">
                    <label data-error="ошибка" data-success="верно" for="orangeForm-pass">Пароль</label>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <input type="hidden" name="token1" value="<?php if ( function_exists( '_token1' ) ) echo _token1(); ?>">
                <button type="submit" class="btn btn-deep-orange" name="signupBtn">Регистрация</button>
            </div>
        </div>
      </form>
    </div>
</div>
</body>
</html>
