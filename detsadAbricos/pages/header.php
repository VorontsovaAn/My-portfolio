<header>
    <div class="header">
        <a href="/index.php" class="logo">
            <h1>Детский сад "Абрикос"</h1>
        </a>

        <nav>
            <a href="/index.php">главная</a>
            <a href="/pages/price.php">стоимость</a>
            <a href="/pages/contacts.php">контакты</a>
            <a href="/pages/reviews.php">отзывы</a>

        </nav>

        <?php
          if(!isset($_SESSION['login'])){
        ?>
        <div>
          <button id="myBtnAuth">Войти</button>
          <button id="myBtnReg">Регистрация</button>
        </div>
        <?php
          }else if(isset($_SESSION['role']) && $_SESSION['role'] == "admin"){
        ?>

        <form action="/php/logout.php">
            <a class="login" href="/pages/adminPanel.php">
                <?php
                    if(isset($_SESSION["login"])){
                        echo $_SESSION["login"];
                    }
                ?>
            </a>
            <button id="logout">Выйти</button>
        </form>

        <?php
          }else{
        ?>

        <form action="/php/logout.php">
            <a class="login">
                <?php
                    if(isset($_SESSION["login"])){
                        echo $_SESSION["login"];
                    }
                ?>
            </a>
            <button id="logout">Выйти</button>
        </form>
        <?php
          };
        ?>


        <div id="myModalAuth" class="modalAuth">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="closeAuth">&times;</span>
                    <h2>Авторизация</h2>
                </div>
                <div class="modal-body">
                    <form action="/php/auth.php" method="post">
                        <div>
                            <p>
                                <input type="text" class="inputForm" name="loginAuth" id="login" required="" placeholder="Логин"><br>
                                <input type="password" class="inputForm" name="passAuth" id="password" required="" placeholder="Пароль"><br>
                                <input type="submit" name="authSubmit" value="Войти"><br><br>
                            </p>
                        </div>
                        <div><img src="/img/vospitatel.jpg"></div>
                    </form>
                </div>
            </div>
        </div>



        <div id="myModalReg" class="modalReg">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="closeReg">&times;</span>
                    <h2>Регистрация</h2>
                </div>
                <div class="modal-body">
                    <form action="/php/registration.php" method="post">
                        <div>
                            <p>
                                <input type="text" class="inputForm" name="firstName" required="" placeholder="Имя"><br>

                                <input type="text" class="inputForm" name="lastName" required=""
                                    placeholder="Фамилия"><br>

                                <input type="tel" class="inputForm" name="tel" required="" placeholder="Телефон"><br>

                                <input type="email" class="inputForm" name="email" required="" placeholder="E-mail"><br>

                                <input type="text" class="inputForm" name="loginReg" required=""
                                    placeholder="Логин"><br>

                                <input type="password" class="inputForm" class="pass" name="passReg" required=""
                                    placeholder="Пароль"><br>

                                <input type="submit" value="Зарегистрироваться" name="regSubmit">
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</header>