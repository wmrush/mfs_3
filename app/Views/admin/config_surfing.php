<div class="row">
    <div class="col-xl-12">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>
                    Настройки <span class="fw-300"><i>серфинга</i></span>
                </h2>

            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <div class="panel-tag">
                        Тут Вы можете настроить цены на серфинг
                    </div>
                    <form method="post" action="">
                        <?= Csrf(); ?>
                        <div class="form-group">
                            <label class="form-label">Минимальная цена клика</label>
                            <input type="text" name="min_price" value="<?= $Config['min_price']; ?>"
                                   class="form-control">
                            <span class="help-block">Минимальная цена для рекламодателя</span>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Стоимость VIP</label>
                            <input type="text" name="price_vip" value="<?= $Config['price_vip']; ?>"
                                   class="form-control">
                            <span class="help-block">За каждый просмотр</span>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Стоимость таймера за каждые +5 сек</label>
                            <input type="text" class="form-control" value="<?= $Config['price_timer']; ?>"
                                   name="price_timer">
                            <span class="help-block">За каждые 5 сек просмотра</span>
                        </div>


                        <div class="form-group">
                            <label class="form-label" for="example-static">Стоимость активного окна</label>
                            <input type="text" class="form-control" value="<?= $Config['price_active']; ?>"
                                   name="price_active">
                            <span class="help-block">За каждый просмотр</span>
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


</div>