<?php

require ('Request.php');

$request = new Request;
$errors = [];

if ($request->isPost()) {
    $request->required('login')
            ->maxSymbols('login', 36)
            ->minSymbols('login', 3);

    $request->required('email')
            ->correctEmail('email');

    $request->required('password1')
            ->minSymbols('password1', 5);

    $request->passwordConfirm('password1', 'password2')
            ->required('password2');

    $isValid = $request->isValid();
    $errors = $request->getErrors();
}