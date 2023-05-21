<?= $this->extend('Auth/template/index'); ?>

<?= $this->Section('konten'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card o-hidden border-0 shadow-lg my-5">
            
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4"><?=lang('Auth.register')?></h1>
                                </div>
                                <?= view('Myth\Auth\Views\_message_block') ?>
                                 <?= csrf_field() ?>

                                <form action="<?= url_to('register') ?>" method="post" class="user">
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user <?php if (session('errors.Firstname')) : ?>is-invalid<?php endif ?>" 
                                            name="Firstname" placeholder="<?=lang('Firstname')?>" value="<?= old('Firstname') ?>">
                                        </div>
                                        <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user <?php if (session('errors.Lastname')) : ?>is-invalid<?php endif ?>" 
                                            name="Lastname" placeholder="<?=lang('Lastname')?>" value="<?= old('Lastname') ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" 
                                            name="email" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
                                    </div>
                                    <div class="form-group">
                                         <input type="text" class="form-control form-control-user <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" 
                                            name="username" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>">
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" class="form-control form-control-user <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>"
                                                name="password" placeholder="<?=lang('Auth.password')?>" autocomplete="off">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control form-control-user <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>"
                                                name="pass_confirm" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block"><?=lang('Auth.register')?></button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot">Lupa Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="login">Sudah memiliki akun? Login!</a>
                                </div>
                                </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
    
</div>

<?= $this->endSection(); ?>