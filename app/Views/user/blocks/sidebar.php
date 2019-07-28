<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <? if (isset($_SESSION['UserId'])): ?>
        <div class="text-center">
            <p><?= $_SESSION['Login']; ?><br>ID: <?= $_SESSION['UserId']; ?></p>
            <p><img src="https://avatarfiles.alphacoders.com/873/87334.gif"></p>
            <p>Баланс: <?= Amount($UserInfo['uBalance']); ?> RUB <br><span class="badge badge-success">Вывести</span>
            </p>
            <p>Реклама: <?= Amount($UserInfo['uBalanceRek']); ?> RUB <br><span
                        class="badge badge-info">Заказать рекламу</span></p>
            <p>У Вас партнеров: 100500 чел.
                <br><span class="badge badge-danger">Продать рабов))</span></p>
            <hr>
        </div>
    <? endif; ?>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="index.html">
                <i class="mdi mdi-clipboard-text-outline menu-icon"></i>
                <span class="menu-title">Аккаунт</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/widgets/widgets.html">
                <i class="mdi mdi-airplay menu-icon"></i>
                <span class="menu-title">Профиль</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-invert-colors menu-icon"></i>
                <span class="menu-title">Заработок</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="pages/ui-features/accordions.html">Серфинг</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/ui-features/buttons.html">Автосерфинг</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/ui-features/badges.html">тесты</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/ui-features/breadcrumbs.html">Задания</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/ui-features/dropdowns.html">Подписки</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/ui-features/modals.html">Лайки</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/ui-features/progress.html">Хуйня какая то</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="pages/ui-features/pagination.html">Еще хуйня какая
                            то</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/ui-features/tabs.html">и так далее</a></li>

                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false"
               aria-controls="ui-advanced">
                <i class="mdi mdi-flask-outline menu-icon"></i>
                <span class="menu-title">Финансы</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-advanced">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="pages/ui-features/dragula.html">Пополнение</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/ui-features/clipboard.html">Вывод</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/ui-features/context-menu.html">Обмен</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/ui-features/slider.html">Статистика</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/ui-features/carousel.html">Придумаем еще</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false"
               aria-controls="form-elements">
                <i class="mdi mdi-clipboard-text-outline menu-icon"></i>
                <span class="menu-title">Рефералы</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Ваши рефералы</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="pages/forms/advanced_elements.html">Биржа
                            рефералов</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/forms/validation.html">Статистика</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                <i class="mdi mdi-chart-donut menu-icon"></i>
                <span class="menu-title">Конкурсы</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="pages/charts/chartjs.html">Конкурсы от рефера</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="pages/charts/morris.html">Конкурсы от проекта</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="pages/charts/flot-chart.html">Конкурсы от хуй знает
                            кого</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Статистика</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="pages/tables/basic-table.html">Статиска аккаунта</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="pages/tables/data-table.html">Статистика по рефам</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="pages/tables/js-grid.html">Статистика по
                            претору)))</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                <i class="mdi mdi-emoticon-outline menu-icon"></i>
                <span class="menu-title">Реклама</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="pages/icons/flag-icons.html">Серфинга</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/icons/mdi.html">Автосерфинг</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/icons/font-awesome.html">Тесты</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/icons/simple-line-icon.html">Письма</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/icons/themify.html">Задания</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/icons/themify.html">VK.com</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/icons/themify.html">Youtube.com</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/icons/themify.html">Что у претора за
                            спиной?</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps">
                <i class="mdi mdi-map-outline menu-icon"></i>
                <span class="menu-title">Инфо</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="maps">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="pages/maps/mapael.html">Форум</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/maps/vector-map.html">Блог</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/maps/google-maps.html">Новости</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false"
               aria-controls="general-pages">
                <i class="mdi mdi-file-outline menu-icon"></i>
                <span class="menu-title">Мега платные услуги)))</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="pages/samples/blank-page.html"> Мега аккаунт </a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="pages/samples/profile.html"> Мега серфинг </a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/samples/faq.html"> Мега задания </a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/samples/faq-2.html"> Мега письма </a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/samples/news-grid.html"> и т.д. </a></li>

                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#apps" aria-expanded="false" aria-controls="apps">
                <i class="mdi mdi-cube-outline menu-icon"></i>
                <span class="menu-title">ЗА претора</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="apps">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="pages/apps/email.html"> Претор хуйло? </a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/apps/calendar.html"> Претор гнида? </a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/apps/todo.html"> Претор пиздабол? </a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/apps/gallery.html"> Претор уебан? </a></li>
                </ul>
            </div>
        </li>


        <li class="nav-item">
            <hr>
            <p class="text-center">Banner 200*300</p>

        </li>


    </ul>
</nav>
<!-- partial -->