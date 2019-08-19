<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <form method="post" action="" class="forms-sample">
                <?= Csrf(); ?>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Тип серфинга</label>
                    <div class="col-sm-9">
                        <select class="form-control form-control-lg" name="type_surf">
                            <option value="1">Стандартный серфинг</option>
                            <option value="1">Тест драйв</option>
                            <option value="1">Автосерфинг</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Заголовок</label>
                    <div class="col-sm-9">
                        <input type="text" name="title" class="form-control" placeholder="максимум 55 символов"/>

                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Описание</label>
                    <div class="col-sm-9">
                        <input type="text" name="description" class="form-control" placeholder="максимум 255 символов"/>

                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">URL сайта</label>
                    <div class="col-sm-9">
                        <input type="url" name="url" class="form-control" placeholder="https://domain.com"/>

                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Таймер</label>
                    <div class="col-sm-9">
                        <select class="form-control form-control-lg" name="timer">
                            <option value="1">10 сек.</option>
                            <option value="2">20 сек.</option>
                            <option value="3">30 сек.</option>
                            <option value="4">60 сек.</option>
                            <option value="5">120 сек.</option>
                            <option value="6">200 сек.</option>
                            <option value="7">300 сек.</option>
                            <option value="8">500 сек.</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Активное окно</label>
                    <div class="col-sm-9">
                        <select class="form-control form-control-lg" name="active_window">
                            <option value="1">Нет</option>
                            <option value="2">Да (+0.01 руб.)</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">V.I.P</label>
                    <div class="col-sm-9">
                        <select class="form-control form-control-lg" name="vip">
                            <option value="1">Нет</option>
                            <option value="2">Да (+ 0.005 руб.)</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Таргейтинг</label>
                    <div class="col-sm-9">

                        <? foreach ($County['coutry'] as $key => $val): ?>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" name="<?= $key; ?>" value="<?= $key; ?>"
                                           class="form-check-input" checked>
                                    <?= $val; ?>
                                </label>
                            </div>
                        <? endforeach; ?>


                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Посещений в сутки</label>
                    <div class="col-sm-9">
                        <input type="text" name="count_visit" class="form-control" placeholder="0"/>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Кому показывать</label>
                    <div class="col-sm-9">
                        <select class="form-control form-control-lg" name="views_ref">
                            <option value="1">Показывать всем</option>
                            <option value="2">Только новичкам</option>
                            <option value="3">Только моим рефералам</option>
                            <option value="4">Пользователям без рефера</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">IP фильтр</label>
                    <div class="col-sm-9">
                        <select class="form-control form-control-lg" name="visit_ip">
                            <option value="1">Разрешить для всех IP</option>
                            <option value="2">Запрещать при полном совпадении IP</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Материалы для взрослых</label>
                    <div class="col-sm-9">
                        <select class="form-control form-control-lg" name="age18">
                            <option value="1">Нет</option>
                            <option value="2">Да</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Стоимость 1-ого просмотра</label>
                    <div class="col-sm-9">
                        <input type="text" name="price" class="form-control" placeholder="0" disabled/>
                    </div>

                </div>

                <div class="form-group row">

                    <div class="col-sm-9">
                        <input type="submit" class="btn btn-success" name="add" value="Добавить">
                    </div>

                </div>


            </form>
        </div>
    </div>
</div>