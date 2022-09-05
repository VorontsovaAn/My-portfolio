<header>
    <?php
        if(isset($_SESSION['reg_ok'])) {
            unset($_SESSION['reg_ok']);
            echo "<script>alert('Регистрация успешно пройдена!');</script>";
        };
        if(isset($_SESSION['reg_no'])) {
            unset($_SESSION['reg_no']);
            echo "<script>alert('Аккаунт с такими данными уже существует!');</script>";
        };
        if(isset($_SESSION['auth_no'])) {
            unset($_SESSION['auth_no']);
            echo "<script>alert('Неправильный логин или пароль!');</script>";
        };
        if(isset($_SESSION['addNew_no'])) {
            unset($_SESSION['addNew_no']);
            echo "<script>alert('Новость дня может быть только одна!');</script>";
        };
        if(isset($_SESSION['editNew_no'])) {
            unset($_SESSION['editNew_no']);
            echo "<script>alert('Новость дня может быть только одна!');</script>";
        };
    ?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="container container-fluid d-flex flex-wrap justify-content-between">

                <a class="navbar-brand" href="/index.php">
                    <img src="/img/лого.png" class="logo" alt="Герб города Челябинск">
                    Городской портал Челябинска
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/index.php">Главная</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/pages/news.php">Новости</a>
                        </li>
                    </ul>

                    <div class="modal fade" id="exampleModalReg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel1">Регистрация</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" style="margin:0 auto;">
                                    <form action="/php/registration.php" method="post" class="regForm">

                                        <input type="text" class="form-control mb-3" name="firstNameReg" id="first_name" placeholder="Имя" required>
                                        <input type="text" class="form-control mb-3" name="lastNameReg" id="last_name" placeholder="Фамилия" required>
                                        <input type="text" class="form-control mb-3" name="pasportReg" id="pasport" placeholder="Паспорт" minlength="10" maxlength="10" required>
                                        <input type="text" class="form-control mb-3" name="innReg" id="INN" placeholder="ИНН"  minlength="10" maxlength="10" required>
                                        <input type="text" class="form-control mb-3" name="snilsReg" id="snils" placeholder="СНИЛС"  minlength="11" maxlength="11" required>
                                        <input type="email" class="form-control mb-3" name="emailReg" id="email" placeholder="Почта" required>
                                        <input type="password" class="form-control mb-3" name="passReg" id="password" placeholder="Пароль" minlength="7" maxlength="15" required>
                                        <p>Уже есть аккаунт? <a class="active" style="cursor:pointer;" data-bs-toggle="modal" data-bs-target="#exampleModalAuth">Войти</a></p>
                                        <button type="submit" class="btn btn-dark">Зарегистрироваться</button>
                                    
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="exampleModalAuth" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Авторизация</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" style="margin:0 auto;">
                                <form action="/php/auth.php" method="post" class="authForm">

                                    <input type="email" class="form-control mb-3" name="emailAuth" id="email" placeholder="Почта" required>
                                    <input type="password" class="form-control mb-3" name="passAuth" id="password" placeholder="Пароль" minlength="7" maxlength="15" required>

                                    <p>Нет аккаунта? <a class="active" style="cursor:pointer;" data-bs-toggle="modal" data-bs-target="#exampleModalReg">Зарегистрироваться</a></p>

                                    <button type="submit" class="btn btn-dark">Войти</button>
                                
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        if(!isset($_SESSION['firstName'])){
                    ?>
                        <button type="button" class="btn btn-dark nav-btn" data-bs-toggle="modal" data-bs-target="#exampleModalAuth">Войти</button>

                    <?php
                        }else if($_SESSION['role'] == 1){
                    ?>
                        <a href="/pages/userPersAc.php" class="btn btn-dark nav-btn">Личный кабинет</a><br><br>
                        <form action="/php/logout.php">
                            <button type="submit" class="btn btn-dark nav-btn">Выйти</button>
                        </form>
                    <?php
                        } else if($_SESSION['role'] == 2){
                            
                    ?>
                        <div class="mt-2 d-flex">
                        <a href="/pages/adminPersAc.php" class="btn btn-dark nav-btn">Личный кабинет</a>
                        <form action="/php/logout.php">
                            <button type="submit" class="btn btn-dark nav-btn">Выйти</button>
                        </form>
                        </div>
                        
                    <?php
                    };
                    ?>

                </div>
            </div>
        </div>
    </nav>
</header>