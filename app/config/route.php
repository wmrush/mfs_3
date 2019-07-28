<?php
/**
 * Роуты проекта
 * формат: дерриктория@контроллер@метод
 */
return [
    /**
     * Прочие роуты
     */
    '' => 'home@indexController@indexAction', //Главная страница
    '/auth' => 'home@authController@indexAction', //Страница авторизации
    '/reg' => 'home@regController@indexAction', //Страница Регистрации

    /**
     * Роуты аккаунта
     */
    '/account' => 'user@accountController@indexAction', //Страница Регистрации
    '/adv-din' => 'user@advdynController@indexAction', //Страница Регистрации


    /**
     * Роуты админки
     */
    '/admin' => 'admin@indexController@indexAction', //Страница Регистрации
    '/admin/auth' => 'admin@authController@indexAction', //Страница Регистрации

];