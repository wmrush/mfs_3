<div class="row">
    <div class="col-xl-6">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>
                    Настройки <span class="fw-300"><i>сайта</i></span>
                </h2>

            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <div class="panel-tag">
                        Тут Вы можете указать необходимые настройки для сайта
                    </div>
                    <form method="post" action="">
                        <?= Csrf(); ?>
                        <div class="form-group">
                            <label class="form-label">Название сайта</label>
                            <input type="text" name="site_name" value="<?= $Config['site_name']; ?>"
                                   class="form-control">
                            <span class="help-block">Указывается в title, а так же в во многих местах сайта</span>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Краткое описание сайта</label>
                            <input type="text" name="site_desc" value="<?= $Config['site_desc']; ?>"
                                   class="form-control">
                            <span class="help-block">Указывается так же как и название сайта</span>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Валюта сайта</label>
                            <input type="text" class="form-control" value="<?= $Config['currency']; ?>" name="currency">
                            <span class="help-block">Указать: RUB, USD, EUR. Для криптовалюты нужны необходимые правки кода. Делается по запросу.</span>
                        </div>


                        <div class="form-group">

                            <button type="submit" class="btn btn-success" name="save_config_admin" value="1">Сохранить
                            </button>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="col-xl-6">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>
                    Настройки <span class="fw-300"><i>E-Mail</i></span>
                </h2>

            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <div class="panel-tag">
                        Тут Вы можете указать необходимые настройки для E-Mail
                    </div>
                    <form method="post" action="">
                        <?= Csrf(); ?>
                        <div class="form-group">
                            <label class="form-label">Сервер SMTP</label>
                            <input type="text" name="server" value="<?= $ConfigEmail['server']; ?>"
                                   class="form-control">
                            <span class="help-block">Указывается в title, а так же в во многих местах сайта</span>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Порт SMTP</label>
                            <input type="text" name="port" value="<?= $ConfigEmail['port']; ?>"
                                   class="form-control">
                            <span class="help-block">Указывается так же как и название сайта</span>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Логин SMTP</label>
                            <input type="text" name="login" value="<?= $ConfigEmail['login']; ?>"
                                   class="form-control">
                            <span class="help-block">Указывается так же как и название сайта</span>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Пароль SMTP</label>
                            <input type="text" class="form-control" value="<?= $ConfigEmail['pass']; ?>" name="pass">
                            <span class="help-block">Указать: RUB, USD, EUR. Для криптовалюты нужны необходимые правки кода. Делается по запросу.</span>
                        </div>


                        <div class="form-group">

                            <button type="submit" class="btn btn-success" name="save_config_admin" value="2">Сохранить
                            </button>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


</div>


