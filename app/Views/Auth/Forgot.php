<?= $this->extend('Auth/template/index'); ?>

<?= $this->section('konten'); ?>
<div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-md-5">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                    <?= view('Myth\Auth\Views\_message_block') ?>
                                        <h1 class="h4 text-gray-900 mb-2">Anda Lupa Password?</h1>
                                        <p><?=lang('Auth.enterEmailForInstructions')?></p>
                                    </div>
                                    <form class="user" action="<?= url_to('forgot') ?>" method="post">
                                    <?= csrf_field() ?>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>"
                                                name="email" aria-describedby="emailHelp"
                                                placeholder="<?=lang('Auth.email')?>">
                                                <div class="invalid-feedback">
                                                    <?= session('errors.email') ?>
                                                </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block"><?=lang('Auth.sendInstructions')?></button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="register">Membuat akun baru!</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="login">Sudah mempunyai akun? Login!</a>
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