<div class="row">
    <div class="col-lg-4">&nbsp;</div>
    <div class="col-lg-4">
        <div class="blankpage-form-field">
            <div class="page-logo m-0 w-100 align-items-center justify-content-center rounded border-bottom-left-radius-0 border-bottom-right-radius-0 px-4">
                <a href="javascript:void(0)" class="page-logo-link press-scale-down d-flex align-items-center">
                    <img src="/public/admin/img/logo.png" alt="SmartAdmin WebApp" aria-roledescription="logo">
                    <span class="page-logo-text mr-1">MFS 3.0 AdminPanel</span>
                    <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
                </a>
            </div>
            <div class="card p-4 border-top-left-radius-0 border-top-right-radius-0">
                <form action="" method="post">
                    <?=Csrf();?>
                    <div class="form-group">
                        <label class="form-label" for="username">Логин</label>
                        <input type="text" name="login" class="form-control" placeholder="Логин"
                               value="">
                        <span class="help-block">
                            Введите логин Администратора
                        </span>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="password">Пароль</label>
                        <input type="password" name="pass" class="form-control" placeholder="password"
                               value="">
                        <span class="help-block">
                            Ваш пароль
                        </span>
                    </div>

                    <button type="submit" class="btn btn-default float-right">Secure login</button>
                </form>
            </div>

        </div>

    </div>
</div>