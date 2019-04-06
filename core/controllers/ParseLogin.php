<?php
    include_once'config/Database.php';
    include_once'config/Utilities.php';

    if(isset($_POST['loginBtn'])){
        //initialise the array
        $form_errors = array();

        //Validate the form
        $required_fields = array('username', 'password');

        $form_errors = array_merge($form_errors, check_empty_fields($required_fields));

        if(empty($form_errors)){

            $user = $_POST['username'];
            $password = $_POST['password'];
            isset($_POST['remember']) ? $remember = $_POST['remember'] : $remember = "";



            $sqlQuery = "SELECT * FROM users WHERE username = :username";
            $statement = $db->prepare($sqlQuery);
            $statement->execute(array(':username' => $user));


            while($row = $statement->fetch()){
                $id = $row['id'];
                $hashed_password = $row['password'];
                $username = $row['username'];


                if(password_verify($password, $hashed_password)){
                    $_SESSION['id'] = $id;
                    $_SESSION['username'] = $username;

                    $fingerprint = md5($_SERVER['REMOTE_ADDR']. $_SERVER['HTTP_USER_AGENT']);
                    $_SESSION['last_active'] = time();
                    $_SESSION['fingerprint'] = $fingerprint;

                    if($remember == "yes") {
                        rememberMe($id);
                    }

                    //call sweetalert
                    echo $welcome = "
                                    <script type=\"text/javascript\">
                                        swal({
                                            title: \"Добро пожаловать, $username\",
                                            text: \"Авторизация прошла успешно\",
                                            icon: \"success\",
                                            timer: 6000,
                                            closeOnClickOutside: false,
                                            buttons: false,});

                                            setTimeout(function(){
                                                window.location.href='social/profile.php';
                                            }, 5000);

                                    </script>";
                }
                else{
                  echo $result = "
                                  <script type=\"text/javascript\">
                                      swal({
                                          title: \"Неверный логин или пароль \",
                                          text: \"Ошибка авторизации\",
                                          icon: \"error\",
                                          timer: 3000,
                                          closeOnClickOutside: false,
                                          buttons: false,});


                                  </script>";
                }
            }


        }

        else {
            if(count($form_errors) == 1) {
                $result = flashMessage("Одна ошибка в форме<br>");
            }
            else {
                $result = flashMessage(' ' .count($form_errors). ' ошибок в форме<br>');
            }
        }
    }

?>
