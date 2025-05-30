<?php

class HomeController
{
    public function index()
    {
        echo '<h1>Добро пожаловать!</h1>';
        echo '<p>Фреймворк запущен.</p>';
        echo '<p><a href="/framework-mvc/public/login">Перейти к авторизации</a></p>';
    }
}
