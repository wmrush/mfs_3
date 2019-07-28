<div class="col-xl-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">

            <form class="form" method="post" action="">
                <?= Csrf(); ?>
                Логин: <input type="text" name="login" class="form-control">

                Пароль: <input type="text" name="password" class="form-control">

                <br>
                <input type="submit" value="Войти" class="btn btn-success">
            </form>

        </div>
    </div>
</div>
