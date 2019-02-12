<?php require ('header.php') ?>
<?php require ('validator.php') ?>

<section class="registration" id="registration">
    <div class="container">
        <div class="reg__form" id="reg__form">
            <div class="head__form__title">Авторизация</div>
            <span v-if="errors.length != 0">Ошибки в заполнении формы:</span>
            <ul>
                <li v-for="error in errors" class="errors__reg__form"> {{ error }}</li>
            </ul>
            <form action="login.php" method="post" @submit="checkLoginForm">
                <div><input type="text" name="login" placeholder="Логин или E-mail" v-model="login"></div>
                <span><?php echo($errors['login'] ? $errors['login'][0] : '') ?></span>
                <div><input type="password" name="password1" placeholder="Пароль" v-model="password1"></div>
                <span><?php echo($errors['password1'] ? $errors['password1'][0] : '') ?></span>
                <div><button type="submit">Войти</button></div>
            </form>
        </div>
    </div>
</section>

<?php require ('footer.php')?>
