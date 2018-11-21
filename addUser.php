<div class="container">
    <form class="panel panel-primary" action="index.php?page=2" method="post">  <!-- //-переход на интекс <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>-->
        <div class="panel-body">
            <div class="form-group">
                <label for="login">Login</label>
                <input type="text" class="form-control" id="login" name="login">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <input type="submit"  class="btn btn-primary" name="add" value="Add user">
            <?php
                if(isset($_POST['add'])) {
                    $login = test_input($_POST["login"]);
                    $email = test_input($_POST["email"]);
                    $password = test_input($_POST["password"]);

                    if ($login === '' || $email === '' || $password === '') {
                        echo '<h1 style="padding: 5px 10px" class="alert-danger">Введите все поля</h1>';
                    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        echo '<h1 style="padding: 5px 10px" class="alert-danger">Не верна почта</h1>';
                    } else {
                        $fp = @fopen("users.txt", "a+");
                        $arrFile = [];
                        $arrLogins = [];
                        while(!feof($fp))
                        {
                            $arrLogins[]=explode(":", fgets($fp))[0];
                            if(!preg_match("/$login/",fgets($fp)))
                                fwrite($fp, $login.":".$password.":".$email."\r\n");
                        }
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            if (!in_array($login, $arrLogins))
                            {
                                fwrite($fp, $login.":".$password.":".$email."\r\n");
                                echo '<h1 style="padding: 5px 10px" class="alert-info">Пользователь добавлен</h1>';
                                $login = $email = $password = "";
                            }
                            else
                            {
                                echo '<h1 style="padding: 5px 10px" class="alert-danger">Данный пользователь сушествует</h1>';
                            }

                        }
                        fclose($fp);
                    };
                };
            ?>
        </div>
    </form>
</div>
