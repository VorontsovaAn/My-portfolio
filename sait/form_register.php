<?php
    //Подключение шапки
    require_once("header.php");
?>

<div class="block_for_messages">
    <?php
        if(isset($_SESSION["error_massage"]) && !empty($_SESSION["error_messages"])){
            echo $_SESSION["error_mesages"];

            unset($_SESSION["error_messages"]);
        }

        if(isset($_SESSION["success_messages"]) && !empty($_SESSION["success_messages"])){
            echo $_SESSION["success_messages"];

            unset($_SESSION["success_messages"]);
        }
    ?>
</div>

<?php
    if(!isset($_SESSION["email"]) && !isset($_SESSION["password"])){

?>

    <div id="form_register">
        <h2>Форма регистрации</h2>
        <form action="register.php" method="post" name="form_register">
            <table>
                <tbody><tr>
                    <td> Имя: </td>
                        <td>
                            <input type="text" name="first_name" required="required">
                        </td>
                    </tr>

                    <tr>
                        <td>Фамилия:</td>
                        <td>
                            <input type="text" name="last-name" required="required">
                        </td>
                    </tr>

                    <tr>
                        <td>Email:</td>
                        <td>
                            <input type="email" name="email" required="required">
                            <span id="valid_email_message" clas="mesage_error"></span>
                        </td>
                    </tr>

                    <tr>
                        <td>Пароль:</td>
                        <td>
                            <input type="password" name="password" placeholder="минимум 6 символов" required="required"><br>
                            <span id="valid_password_message" class="mesage_error"></span>
                        </td>
                    </tr>

                    <tr>
                        <td>Введите капчу:</td>
                        <td>
                            <p>
                                <img src="captcha.php" alt="Капча" /><br><br>
                                <input type="text" name="captcha" placeholder="Проверочный код" required="required"><br>
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="submit" name="btn_submit_register" value="Зарегистрироваться!">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
<?php
    }

    require_once("footer.php")
?>