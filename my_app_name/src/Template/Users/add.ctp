<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login Form Design One | Fazt</title>
</head>

<body>
    <nav class="large-3 medium-4 columns nom" id="actions-sidebar">
        <ul class="side-nav">
            <li class="heading"><?= __('Actions') ?></li>
            <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        </ul>
    </nav>
    <div class="login-box">
        <h1>Registro</h1>
        <?= $this->Form->create($user) ?>
        <fieldset>
            <!-- USERNAME INPUT -->
            <label for="username">Email</label>
            <input type="text" name="email" placeholder="Ingrese Email">
            <!-- PASSWORD INPUT -->
            <label for="password">Contraseña</label>
            <input type="password" name="password" placeholder="Ingrese Contraseña">
            <input type="submit" value="Registrarse">
        </fieldset>
        <?= $this->Form->end() ?>
    </div>
</body>
<style>
    .nom {
        position: absolute;
        right: 10px;
        top: 10px;
        color: white;
    }

    body {
        margin: 0;
        padding: 0;
        background: url(/img/bg.jpeg) no-repeat center top;
        background-size: cover;
        font-family: sans-serif;
        height: 100vh;
    }

    .login-box {
        width: 320px;
        height: 420px;
        background: #000;
        color: #fff;
        top: 50%;
        left: 50%;
        position: absolute;
        transform: translate(-50%, -50%);
        box-sizing: border-box;
        padding: 70px 30px;
    }

    .login-box .avatar {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        position: absolute;
        top: -50px;
        left: calc(50% - 50px);
    }

    .login-box h1 {
        margin: 0;
        padding: 0 0 20px;
        text-align: center;
        font-size: 22px;
    }

    .login-box label {
        margin: 0;
        padding: 0;
        font-weight: bold;
        display: block;
    }

    .login-box input {
        width: 100%;
        margin-bottom: 20px;
    }

    .login-box input[type="text"],
    .login-box input[type="password"] {
        border: none;
        border-bottom: 1px solid #fff;
        background: transparent;
        outline: none;
        height: 40px;
        color: #fff;
        font-size: 16px;
    }

    .login-box input[type="submit"] {
        border: none;
        outline: none;
        height: 40px;
        background: #b80f22;
        color: #fff;
        font-size: 18px;
        border-radius: 20px;
    }

    .login-box input[type="submit"]:hover {
        cursor: pointer;
        background: #ffc107;
        color: #000;
    }

    .login-box a {
        text-decoration: none;
        font-size: 12px;
        line-height: 20px;
        color: darkgrey;
    }

    .login-box a:hover {
        color: #fff;
    }
</style>



</html>