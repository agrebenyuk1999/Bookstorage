<?php require ('header.php') ?>
<?php require ('validator.php') ?>

<section class="registration" id="registration">
    <div class="container">
        <div class="reg__form" id="reg__form">
            <div class="head__form__title">Регистрация</div>
            <span v-if="errors.length != 0">Ошибки в заполнении формы:</span>
            <ul>
                <li v-for="error in errors" class="errors__reg__form">{{ error }}</li>
            </ul>
            <form action="registration.php" method="post" @submit="checkForm">
                <div><input type="text" name="login" placeholder="Ваш логин" v-model="login"></div>
                <span><?php echo($errors['login'] ? $errors['login'][0] : '') ?></span>
                <div><input type="text" name="email" placeholder="Ваш E-mail" v-model="email"></div>
                <span><?php echo($errors['email'] ? $errors['email'][0] : '') ?></span>
                <div><input type="password" name="password1" placeholder="Пароль" v-model="password1"></div>
                <span><?php echo($errors['password1'] ? $errors['password1'][0] : '') ?></span>
                <div><input type="password" name="password2" placeholder="Повторите пароль" v-model="password2"></div>
                <span><?php echo($errors['password2'] ? $errors['password2'][0] : '') ?></span>
                <div><button type="submit">Зарегистрироваться</button></div>
            </form>
        </div>
    </div>
</section>

<?php require ('footer.php')?>
